<?php

namespace App\Http\Controllers;

use App\Models\riwayatpenjualan;
use Illuminate\Http\Request;

class riwayatpenjualanController extends Controller
{
    public function index()
    {
        $laporan_penjualan = riwayatpenjualan::all();
        return view('riwayatpenjualan',["riwayatpenjualan"=>$laporan_penjualan]);
    }
}