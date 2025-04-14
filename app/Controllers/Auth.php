<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginPost()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'isLoggedIn' => true
            ]);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah.');
        }
    }

    public function register()
    {
        return view('auth/register');
    }

    public function registerPost()
    {
        $model = new UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        $model->insert($data);

        return redirect()->to('/login')->with('success', 'Pendaftaran berhasil, silakan login.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
