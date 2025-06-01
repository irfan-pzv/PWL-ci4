<?php

namespace App\Controllers;
use App\Models\NasabahModel;
use App\Models\SetorModel;

class NasabahController extends BaseController
{
    public function loginForm()
{
    return view('nasabah/login');
}
public function login()
{
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    $nasabahModel = new \App\Models\NasabahModel();
    $nasabah = $nasabahModel->where('email', $email)->first();

    if ($nasabah) {
//         dd($password, $nasabah['password'], password_verify($password, $nasabah['password']));
//         echo "Password input: $password <br>";
// echo "Hash from DB: " . $nasabah['password'] . "<br>";
// echo "Verify: " . (password_verify($password, $nasabah['password']) ? 'true' : 'false');
// exit;

        if (password_verify($password, $nasabah['password'])) {
            session()->set([
                'nasabah_nin' => $nasabah['nin'],
                'nasabah_nama' => $nasabah['nama'],
                'logged_in_nasabah' => true
            ]);
          

            return redirect()->to('/nasabah/dashboard');
        } else {
            return redirect()->back()->with('error', 'Password salah');
        }
    } else {
        return redirect()->back()->with('error', 'Email tidak ditemukan');
    }
}


public function dashboard() {
    if (!session()->get('logged_in_nasabah')) {
        return redirect()->to('/nasabah/login')->with('error', 'Silahkan login terlebih dahulu');
    }
    
    $nin = session()->get('nasabah_nin');
    
    // Debugging - pastikan nin benar
    // log_message('debug', 'NIN Nasabah: ' . $nin);
    
    $setorModel = new SetorModel();
    $totalBerat = $setorModel->where('nin', $nin)->selectSum('berat')->first();
    $beratSampah = isset($totalBerat['berat']) ? $totalBerat['berat'] : 0;
    $poin = floor($beratSampah / 5) * 5000;
    
    $nasabahModel = new NasabahModel();
    $db = \Config\Database::connect();
    
    // Perbaikan query dengan menambahkan debug logging
    $builder = $db->table('setor');
    $query = $builder->selectSum('total')
        ->where('nin', $nin)
        ->get();
    // log_message('debug', 'Query: ' . $db->getLastQuery());
    
    $totalSetor = $query->getRowArray();
    $saldoSetor = $totalSetor['total'] ?? 0;
    
    // Total penarikan
    $totalTarik = $db->table('tarik')
        ->selectSum('jumlah_tarik')
        ->where('nin', $nin)
        ->get()
        ->getRowArray();
    $saldoTarik = $totalTarik['jumlah_tarik'] ?? 0;
    
    // Saldo akhir = setor - tarik
    $saldo = $saldoSetor - $saldoTarik;
    
    // Debugging - cek hasil perhitungan
    // log_message('debug', 'Saldo Setor: ' . $saldoSetor . ', Saldo Tarik: ' . $saldoTarik . ', Saldo Akhir: ' . $saldo);
    
    $lastSetor = $setorModel->where('nin', $nin)->orderBy('tanggal_setor', 'DESC')->findAll(5);
    $lastTarik = $db->table('tarik')
        ->where('nin', $nin)
        ->orderBy('tanggal_tarik', 'DESC')
        ->limit(5)
        ->get()->getResultArray();
    
    return view('nasabah/dashboard', [
        'berat' => $beratSampah,
        'poin' => $poin,
        'nasabah' => $nasabahModel->find($nin), 
        'saldo' => $saldo,
        'lastSetor' => $lastSetor,
        'lastTarik' => $lastTarik
    ]);
}


public function logout()
{
    session()->remove(['nasabah_nin', 'nasabah_nama', 'logged_in_nasabah']);
    return redirect()->to('/nasabah/login')->with('message', 'Anda berhasil logout');
}
}