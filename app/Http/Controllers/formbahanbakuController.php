<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bahanbaku;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class formbahanbakuController extends Controller
{
    public function tampil(){
        return view('formbahanbaku');
    }

    public function add(Request $request){
        $bahanbaku = new bahanbaku();
        $bahanbaku->id_bahan_baku=$request->get("id_bahan_baku");
        $bahanbaku->nama_bahan_baku=$request->get("nama_bahan_baku");
        $bahanbaku->stock_bahan_baku=$request->get("stock_bahan_baku");
        $bahanbaku->harga_bahan_baku=$request->get("harga_bahan_baku");
        $bahanbaku->Deskripsi_bahan_baku=$request->get("deskripsi");
        $bahanbaku->save();

        return redirect('/bahanbaku');
    }

    public function delete($id){
        $bahanbaku = bahanbaku::where('id_bahan_baku',$id)->delete();

        return redirect('/bahanbaku');
    }
    
    public function edit($id){
        $bahanbaku = bahanbaku::where('id_bahan_baku',$id)->first();

        return view('editbahanbaku',["bahanbaku"=>$bahanbaku]);
    }
    
    public function update(Request $request){

        $data = array(
            'nama_bahan_baku'=>$request->input("nama_bahan_baku"),
            'harga_bahan_baku'=>$request->input("harga_bahan_baku"),
            'Deskripsi_bahan_baku'=>$request->input("deskripsi"),
        );
        DB::table('bahan_baku')->where('id_bahan_baku', '=', request()->get('id_bahan_baku'))->update($data);
        return Redirect::to('bahanbaku');
    }
}
