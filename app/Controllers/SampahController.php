<?php

namespace App\Controllers;
use App\Models\SampahModel;

class SampahController extends BaseController
{
    public function index()
    {
        $model = new SampahModel();
        $data['sampah'] = $model->findAll();
        return view('sampah/index', $data);
    }

    public function create()
    {
        return view('sampah/create');
    }

    public function store()
    {
        $model = new SampahModel();
    
        $fileGambar = $this->request->getFile('gambar');
    
        if ($fileGambar->isValid() && !$fileGambar->hasMoved()) {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('uploads/sampah', $namaGambar);
    
            $data = [
                'jenis_sampah' => $this->request->getPost('jenis_sampah'),
                'satuan'       => $this->request->getPost('satuan'),
                'harga'        => $this->request->getPost('harga'),
                'gambar'       => 'uploads/sampah/' . $namaGambar,
                'deskripsi'    => $this->request->getPost('deskripsi')
            ];
    
            $model->insert($data);
    
            return redirect()->to('/sampah')->with('message', 'Sampah berhasil ditambahkan!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal upload gambar.');
        }
    }
    
    public function edit($id)
    {
        $model = new SampahModel();
        $data['sampah'] = $model->find($id);
        
        if (empty($data['sampah'])) {
            return redirect()->to('/sampah')->with('error', 'Data sampah tidak ditemukan.');
        }
        
        return view('sampah/edit', $data);
    }
    
    public function update()
    {
        $model = new SampahModel();
        // $id = $this->request->getPost('jenis_sampah');
        $id = $this->request->getPost('id'); 
        
        $fileGambar = $this->request->getFile('gambar');
        $oldData = $model->find($id);
        
        $data = [
            'jenis_sampah' => $this->request->getPost('jenis_sampah'),
            'satuan'       => $this->request->getPost('satuan'),
            'harga'        => $this->request->getPost('harga'),
            'deskripsi'    => $this->request->getPost('deskripsi')
        ];
        
        // Cek apakah ada gambar baru yang diupload
        if ($fileGambar->isValid() && !$fileGambar->hasMoved()) {
            // Hapus file gambar lama jika ada
            if (!empty($oldData['gambar']) && file_exists($oldData['gambar'])) {
                unlink($oldData['gambar']);
            }
            
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('uploads/sampah', $namaGambar);
            $data['gambar'] = 'uploads/sampah/' . $namaGambar;
        }
        
        $model->update($id, $data);
        
        return redirect()->to('/sampah')->with('message', 'Data sampah berhasil diperbarui!');
    }

    public function delete($id)
    {
        $model = new SampahModel();
        
        // Hapus file gambar sebelum menghapus data
        $sampah = $model->find($id);
        if ($sampah && !empty($sampah['gambar']) && file_exists($sampah['gambar'])) {
            unlink($sampah['gambar']);
        }
        
        $model->delete($id);
        return redirect()->to('/sampah')->with('message', 'Data sampah berhasil dihapus');
    }
}