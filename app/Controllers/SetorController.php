<?php

namespace App\Controllers;
use App\Models\SetorModel;
use App\Models\NasabahModel;
use App\Models\SampahModel;

class SetorController extends BaseController
{
    public function index()
    {
        $model = new SetorModel();
        $data['setor'] = $model->findAll();
        return view('setor/index', $data);
    }

    public function create()
    {
        $nasabahModel = new NasabahModel();
        $sampahModel = new SampahModel();

        $data = [
            'nasabah' => $nasabahModel->findAll(),
            'sampah' => $sampahModel->findAll(),
        ];

        return view('setor/create', $data);
    }

    // public function store()
    // {
    //     $model = new SetorModel();
    //     $model->insert($this->request->getPost());
    //     return redirect()->to('/setor')->with('message', 'Data setor ditambahkan');
    // }
    public function store()
{
    $model = new SetorModel();
    $post = $this->request->getPost();
    
    // Hitung total (berat * harga)
    $berat = floatval($post['berat']);
    $harga = floatval($post['harga']);
    $total = $berat * $harga;
    
    // Tambahkan total ke data yang akan disimpan
    $post['total'] = $total;
    
    // Insert data
    if ($model->insert($post)) {
        return redirect()->to('/setor')->with('message', 'Data setor ditambahkan');
    } else {
        return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data');
    }
}

    public function delete($id)
    {
        $model = new SetorModel();
        $model->delete($id);
        return redirect()->to('/setor')->with('message', 'Data setor dihapus');
    }
}
