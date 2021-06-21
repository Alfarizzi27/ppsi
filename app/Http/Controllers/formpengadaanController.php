<?php

namespace App\Http\Controllers;

use App\Models\bahanbaku;
use App\Models\pengadaan;
use App\Models\supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class formpengadaanController extends Controller
{
    public function tampil(){
        $bahan = bahanbaku::all();
        $supplier = supplier::all();
        return view('formpengadaan',["bahan"=>$bahan,"supplier"=>$supplier]);
    }

    public function add(Request $request){
        $pengadaan = new pengadaan();
        $pengadaan->id_pengadaan=$request->get("id_pengadaan");
        $pengadaan->id_bahan_baku=$request->get("id_bahan_baku");
        $pengadaan->tanggal_pengadaan=$request->get("tanggal_pengadaan");
        $pengadaan->jumlah_pengadaan=$request->get("jumlah_pengadaan");
        $pengadaan->harga_pengadaan=$request->get("harga_pengadaan");
        $pengadaan->id_supplier=$request->get("id_supplier");
        $pengadaan->save();

        $bahan = bahanbaku::where('id_bahan_baku','=',request()->get('id_bahan_baku'))->first();
        $bahan->stock_bahan_baku = $bahan->stock_bahan_baku + $request->get('jumlah_pengadaan');
        $bahan->save();
        return redirect('/pengadaan');
    }

    public function delete($id){
        $pengadaan = pengadaan::where('id_pengadaan',$id)->delete();

        return redirect('/pengadaan');
    }
    
    public function edit($id){
        $bahan = bahanbaku::all();
        $supplier = supplier::all();
        $pengadaan = pengadaan::where('id_pengadaan',$id)->first();

        return view('editpengadaan',["pengadaan"=>$pengadaan,"bahan"=>$bahan,"supplier"=>$supplier]);
    }
    
    public function update(Request $request){
        $data = array(
            'id_bahan_baku'=>$request->input("id_bahan_baku"),
            'tanggal_pengadaan'=>$request->input("tanggal_pengadaan"),
            'jumlah_pengadaan'=>$request->input("jumlah_pengadaan"),
            'harga_pengadaan'=>$request->input("harga_pengadaan"),
            'id_supplier'=>$request->input("id_supplier"),
        );
        DB::table('pengadaan')->where('id_pengadaan', '=', request()->get('id_pengadaan'))->update($data);
        return Redirect::to('pengadaan');
    }
}
