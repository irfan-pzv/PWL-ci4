<?php
namespace App\Controllers;
class LpLayananController extends BaseController
{
    public function pickup(){
        return view('layanan_lp/pickup');
    }
    public function dropoff(){
        return view('layanan_lp/dropoff');
    }
    public function company(){
        return view('layanan_lp/company');
    }
    public function event(){
        return view('layanan_lp/event');
    }
}