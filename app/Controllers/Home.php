<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function getMitra()
    {
        return view('mitra'); 
    }

    public function getBlog()
    {
        return view('blog'); 
    }
    public function indexkopok()
    {
        return view('indexkopok'); 
    }
}
