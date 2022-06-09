<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Hii! Selamat Datang';
    }
    
    public function about() {
        echo 'Nama : Deki Firmansyah';
        echo '<br>NIM : 2041720113';
    }

    public function articles($id) {
        return 'Ini adalah halaman artikel dengan ID: '.$id;
    }
}
