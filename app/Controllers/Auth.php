<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\NasabahModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login($role = null)
    {
        // If user is already logged in, redirect to appropriate dashboard
        if (session()->get('logged_in_admin')) {
            return redirect()->to('/admin/dashboard');
        } elseif (session()->get('logged_in_nasabah')) {
            return redirect()->to('/nasabah/dashboard');
        }

        if ($role == 'admin') {
            return view('auth/login'); // Admin login form
        } elseif ($role == 'nasabah') {
            return view('nasabah/login'); // Nasabah login form
        } else {
            return redirect()->to('/login/admin'); // Default, redirect to admin login
        }
    }

    public function attemptLogin()
    {
        $session = session();
        
        // Determine login type (admin or nasabah)
        $loginType = $this->request->getPost('login_type');
        
        if ($loginType == 'admin') {
            return $this->adminLogin();
        } else {
            return $this->nasabahLogin();
        }
    }
    
    private function adminLogin()
    {
        $session = session();
        $adminModel = new AdminModel();
        
        $nia = $this->request->getPost('nia');
        $password = $this->request->getPost('password');
        
        $admin = $adminModel->where('nia', $nia)->first();
        
        if ($admin) {
            if (password_verify($password, $admin['password'])) {
                $this->setAdminSession($admin);
                return redirect()->to('/admin/dashboard');
            } 
            elseif ($password === $admin['password']) {
                $adminModel->update($nia, ['password' => password_hash($password, PASSWORD_DEFAULT)]);
                $this->setAdminSession($admin);
                return redirect()->to('/admin/dashboard');
            }
            else {
                return redirect()->back()->with('error', 'Password salah');
            }
        }
        
        return redirect()->back()->with('error', 'NIA tidak ditemukan');
    }
    
    private function nasabahLogin()
    {
        $session = session();
        $nasabahModel = new NasabahModel();
        
        $nin = $this->request->getPost('nin');
        $password = $this->request->getPost('password');
        
        $nasabah = $nasabahModel->where('nin', $nin)->first();
        
        if ($nasabah) {
            // For new accounts where password is hashed
            if (password_verify($password, $nasabah['password'])) {
                $this->setNasabahSession($nasabah);
                return redirect()->to('/nasabah/dashboard');
            } 
            elseif ($password === $nasabah['password']) {
                $nasabahModel->update($nin, ['password' => password_hash($password, PASSWORD_DEFAULT)]);
                $this->setNasabahSession($nasabah);
                return redirect()->to('/nasabah/dashboard');
            }
            else {
                return redirect()->back()->with('error', 'Password salah');
            }
        }
        
        return redirect()->back()->with('error', 'NIN tidak ditemukan');
    }
    
    private function setAdminSession($admin)
    {
        $session = session();
        $session->set([
            'nia'            => $admin['nia'],
            'nama'           => $admin['nama'],
            'email'          => $admin['email'],
            'level'          => $admin['level'],
            'logged_in_admin' => true
        ]);
    }
    
    private function setNasabahSession($nasabah)
    {
        $session = session();
        $session->set([
            'nin'             => $nasabah['nin'],
            'nama'            => $nasabah['nama'],
            'email'           => $nasabah['email'],
            'saldo'           => $nasabah['saldo'],
            'logged_in_nasabah' => true
        ]);
    }

    public function logout()
    {
        $session = session();
        
        // Check which type of user is logged in
        if ($session->get('logged_in_admin')) {
            $session->remove([
                'nia', 'nama', 'email', 'level', 'logged_in_admin'
            ]);
            return redirect()->to('/login/admin');
        } 
        else if ($session->get('logged_in_nasabah')) {
            $session->remove([
                'nin', 'nama', 'email', 'saldo', 'logged_in_nasabah'
            ]);
            return redirect()->to('/login/nasabah');
        }
        
        // Default fallback
        $session->destroy();
        return redirect()->to('/login/admin');
    }
}