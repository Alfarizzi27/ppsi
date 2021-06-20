<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class formprodukController extends Controller
{
    public function tampil(){
        return view('formproduk');
    }

    public function add(Request $request){
        $produk = new produk();
        $produk->id_produk=$request->get("id_produk");
        $produk->nama_produk=$request->get("nama_produk");
        $produk->stock_produk=$request->get("stock_produk");
        $produk->harga_produk=$request->get("harga_produk");
        $produk->Deskripsi_produk=$request->get("deskripsi");
        $produk->save();

        return redirect('/produk');
    }

    public function delete($id){
        $produk = produk::where('id_produk',$id)->delete();

        return redirect('/produk');
    }
    
    public function edit($id){
        $produk = produk::where('id_produk',$id)->first();

        return view('editproduk',["produk"=>$produk]);
    }
    
    public function update(Request $request){

        $data = array(
            'nama_produk'=>$request->input("nama_produk"),
            'stock_produk'=>$request->input("stock_produk"),
            'harga_produk'=>$request->input("harga_produk"),
            'Deskripsi_produk'=>$request->input("deskripsi"),
        );
        DB::table('produk')->where('id_produk', '=', request()->get('id_produk'))->update($data);
        return Redirect::to('produk');
    }
}
