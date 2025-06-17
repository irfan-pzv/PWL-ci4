<?php

namespace App\Controllers;

class LpSampahController extends BaseController
{
    public function kertas()
    {
        return view('sampah_lp/kertas');
    }
    public function plastik()
    {
        return view('sampah_lp/plastik');
    }
    public function aluminium()
    {
        return view('sampah_lp/aluminium');
    }
    public function logam()
    {
        return view('sampah_lp/logam');
    }
    public function elektronik()
    {
        return view('sampah_lp/elektronik');
    }
    public function botol_kaca()
    {
        return view('sampah_lp/botol_kaca');
    }
    public function merek()
    {
        return view('sampah_lp/merek');
    }
    public function khusus()
    {
        return view('sampah_lp/khusus');
    }
    public function kesehatan()
    {
        return view('sampah_lp/kesehatan');
    }
    public function kaca()
    {
        return view('sampah_lp/kaca');
    }
}
