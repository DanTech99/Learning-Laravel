<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //metodos
    public function __invoke() {
        return view('home');
    }
}
