<?php

namespace App\Http\Controllers;

use App\Models\pengadaanbahan;
use Illuminate\Http\Request;

class pengadaanbahanController extends Controller
{
    public function index()
    {
        $pengadaanbahan = pengadaanbahan::all();
        return view('pengadaanbahan',["pengadaanbahan"=>$pengadaanbahan]);
    }
}