<?php

namespace App\Controllers;
use App\Models\TarikModel;
use App\Models\SetorModel;
use App\Models\NasabahModel;

class TarikController extends BaseController
{
    public function index()
    {
        $model = new TarikModel();
        $data['tarik'] = $model->findAll();
        return view('tarik/index', $data);
    }

    public function create()
    {
        $nasabahModel = new NasabahModel();
        $setorModel = new SetorModel();
        $tarikModel = new TarikModel(); 
        
        // Ambil semua nasabah
        $nasabah = $nasabahModel->findAll();
        
        // Hitung saldo untuk setiap nasabah
        foreach ($nasabah as $key => $n) {
            // Hitung total setoran
            $totalSetor = $setorModel->selectSum('total')
                                    ->where('nin', $n['nin'])
                                    ->findAll();
            $totalSetor = !empty($totalSetor) ? $totalSetor[0]['total'] : 0;
            
            // Hitung total penarikan
            $totalTarik = $tarikModel->selectSum('jumlah_tarik')
                                    ->where('nin', $n['nin'])
                                    ->findAll();
            $totalTarik = !empty($totalTarik) ? $totalTarik[0]['jumlah_tarik'] : 0;
            
            // Hitung saldo akhir
            $nasabah[$key]['saldo'] = $totalSetor - $totalTarik;
        }
        
        $data['nasabah'] = $nasabah;
        return view('tarik/create', $data);
    }

    public function store()
    {
        $rules = [
            'nin' => 'required',
            'tanggal_tarik' => 'required|valid_date',
            'jumlah_tarik' => 'required|numeric|greater_than[0]',
            'saldo' => 'required|numeric'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }

        $nin = $this->request->getPost('nin');
        $jumlahTarik = $this->request->getPost('jumlah_tarik');
        
        // Hitung saldo terkini dari nasabah
        $setorModel = new SetorModel();
        $tarikModel = new TarikModel();
        
        // Total setoran
        $totalSetor = $setorModel->selectSum('total')
                                ->where('nin', $nin)
                                ->findAll();
        $totalSetor = !empty($totalSetor) ? $totalSetor[0]['total'] : 0;
        
        // Total penarikan
        $totalTarik = $tarikModel->selectSum('jumlah_tarik')
                                ->where('nin', $nin)
                                ->findAll();
        $totalTarik = !empty($totalTarik) ? $totalTarik[0]['jumlah_tarik'] : 0;
        
        // Saldo terkini
        $saldoTerkini = $totalSetor - $totalTarik;
        
        // Cek saldo mencukupi
        if ($jumlahTarik > $saldoTerkini) {
            return redirect()->back()->withInput()->with('error', 'Saldo tidak mencukupi untuk melakukan penarikan.');
        }

        $data = [
            'nin' => $nin,
            'tanggal_tarik' => $this->request->getPost('tanggal_tarik'),
            'jumlah_tarik' => $jumlahTarik,
            'saldo' => $saldoTerkini, // Menyimpan saldo awal saat penarikan
            'nia' => $this->request->getPost('nia')
        ];

        // Proses penarikan
        $model = new TarikModel();
        $model->insert($data);

        return redirect()->to('/tarik')->with('message', 'Penarikan berhasil dilakukan');
    }

    public function delete($id)
    {
        $model = new TarikModel();
        $tarik = $model->find($id);
        
        if ($tarik) {
            // Hapus data penarikan
            $model->delete($id);
            return redirect()->to('/tarik')->with('message', 'Data penarikan berhasil dihapus');
        }
        
        return redirect()->to('/tarik')->with('error', 'Data penarikan tidak ditemukan');
    }

    // Helper untuk mendapatkan saldo nasabah terkini
    private function getSaldoNasabah($nin)
    {
        $setorModel = new SetorModel();
        $tarikModel = new TarikModel();
        
        // Total setoran
        $totalSetor = $setorModel->selectSum('total')
                                ->where('nin', $nin)
                                ->findAll();
        $totalSetor = !empty($totalSetor) ? $totalSetor[0]['total'] : 0;
        
        // Total penarikan
        $totalTarik = $tarikModel->selectSum('jumlah_tarik')
                                ->where('nin', $nin)
                                ->findAll();
        $totalTarik = !empty($totalTarik) ? $totalTarik[0]['jumlah_tarik'] : 0;
        
        return $totalSetor - $totalTarik;
    }
}