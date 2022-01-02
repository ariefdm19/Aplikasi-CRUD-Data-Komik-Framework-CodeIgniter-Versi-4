<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function coba()
    {
        echo "Ini adalah Halaman Home";
    }
}
