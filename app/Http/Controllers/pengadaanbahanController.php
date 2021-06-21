<?php

namespace App\Http\Controllers;

use App\Models\pengadaan;
use Illuminate\Http\Request;

class pengadaanbahanController extends Controller
{
    public function index()
    {
        $pengadaanbahan = pengadaan::all();
        return view('pengadaanbahan',["pengadaanbahan"=>$pengadaanbahan]);
    }
}