<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class PastaController extends Controller
{
    public function pasta(){
        return view('king');
    }

    public function menu(){
        $data = Menu::All();
        return view('menu', compact('data'));
    }
}
