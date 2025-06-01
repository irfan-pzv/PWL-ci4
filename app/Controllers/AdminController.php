<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\NasabahModel;
use App\Models\SetorModel;
use App\Models\TarikModel;
use App\Models\SampahModel;

class AdminController extends BaseController {
    
    public function __construct()
    {
        // // Memeriksa apakah admin sudah login
        // if (!session()->get('logged_in_admin')) {
        //     return redirect()->to('/login/admin');
        // }
    }
    
    public function dashboard()
    {
        // Get statistics for dashboard
        $nasabahModel = new NasabahModel();
        $setorModel = new SetorModel();
        $tarikModel = new TarikModel();
        $sampahModel = new SampahModel();
        
        $data = [
            'totalNasabah' => $nasabahModel->countAll(),
            'totalSetor' => $setorModel->selectSum('berat')->first()['berat'] ?? 0,
            'totalTarik' => $tarikModel->selectSum('jumlah_tarik')->first()['jumlah_tarik'] ?? 0,
            'totalJenisSampah' => $sampahModel->countAll(),
        ];
        
        // Get last 5 setoran
        $data['lastSetor'] = $setorModel->select('setor.*, nasabah.nama, sampah.jenis_sampah')
                              ->join('nasabah', 'nasabah.nin = setor.nin')
                              ->join('sampah', 'sampah.jenis_sampah = setor.jenis_sampah')
                              ->orderBy('tanggal_setor', 'DESC')
                              ->limit(5)
                              ->find();
                              
        // Get last 5 penarikan
        $data['lastTarik'] = $tarikModel->select('tarik.*, nasabah.nama')
                              ->join('nasabah', 'nasabah.nin = tarik.nin')
                              ->orderBy('tanggal_tarik', 'DESC')
                              ->limit(5)
                              ->find();
        
        return view('admin/dashboard', $data);
    }
    
    public function nasabahIndex()
    {
        $model = new NasabahModel();
        $data['nasabah'] = $model->findAll();
        return view('admin/nasabah/index', $data);
    }
    
    public function nasabahCreate()
    {
        return view('admin/nasabah/create');
    }
    
    public function createNasabah()
    {
        $model = new NasabahModel();
        
        // Validate input
        $rules = [
            'nin' => 'required|max_length[10]|is_unique[nasabah.nin]',
            'nama' => 'required|max_length[20]',
            'rt' => 'required|numeric|less_than_equal_to[9]|greater_than[0]',
            'alamat' => 'required|max_length[30]',
            'telepon' => 'required|max_length[12]',
            'email' => 'required|valid_email|max_length[50]|is_unique[nasabah.email]',
            'password' => 'required|max_length[20]'
        ];
        
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        
        $data = [
            'nin' => $this->request->getPost('nin'),
            'nama' => $this->request->getPost('nama'),
            'rt' => $this->request->getPost('rt'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT), // Hash password
            'saldo' => 0,
            'sampah' => 0
        ];
        
        $model->insert($data);
        return redirect()->to('/admin/nasabah')->with('message', 'Nasabah berhasil dibuat.');
    }
    
    public function nasabahEdit($nin)
    {
        $model = new NasabahModel();
        $data['nasabah'] = $model->find($nin);
        return view('admin/nasabah/edit', $data);
    }
    
    public function updateNasabah()
    {
        $model = new NasabahModel();
        $nin = $this->request->getPost('nin');
        
        // Validate input
        $rules = [
            'nama' => 'required|max_length[20]',
            'rt' => 'required|numeric|less_than_equal_to[9]|greater_than[0]',
            'alamat' => 'required|max_length[30]',
            'telepon' => 'required|max_length[12]',
            'email' => 'required|valid_email|max_length[50]',
        ];
        
        // Check if email is unique unless it's the same as the current one
        $currentNasabah = $model->find($nin);
        if ($currentNasabah['email'] !== $this->request->getPost('email')) {
            $rules['email'] .= '|is_unique[nasabah.email]';
        }
        
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        
        $data = [
            'nama' => $this->request->getPost('nama'),
            'rt' => $this->request->getPost('rt'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            'email' => $this->request->getPost('email'),
        ];
        
        // Jika password diubah
        if ($this->request->getPost('password')) {
            $data['password'] = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);
        }
        
        $model->update($nin, $data);
        return redirect()->to('/admin/nasabah')->with('message', 'Nasabah berhasil diperbarui.');
    }
    
    public function deleteNasabah($nin)
    {
        $model = new NasabahModel();
        $model->delete($nin);
        return redirect()->to('/admin/nasabah')->with('message', 'Nasabah berhasil dihapus.');
    }
}