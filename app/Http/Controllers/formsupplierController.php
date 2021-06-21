<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class formsupplierController extends Controller
{
    public function tampil(){
        return view('formsupplier');
    }

    public function add(Request $request){
        $supplier = new supplier();
        $supplier->id_supplier=$request->get("id_supplier");
        $supplier->nama_supplier=$request->get("nama_supplier");
        $supplier->alamat_supplier=$request->get("alamat_supplier");
        $supplier->telepon=$request->get("telepon");
        $supplier->save();

        return redirect('/supplier');
    }

    public function delete($id){
        $supplier = supplier::where('id_supplier',$id)->delete();

        return redirect('/supplier');
    }
    
    public function edit($id){
        $supplier = supplier::where('id_supplier',$id)->first();

        return view('editsupplier',["supplier"=>$supplier]);
    }
    
    public function update(Request $request){

        $data = array(
            'nama_supplier'=>$request->input("nama_supplier"),
            'alamat_supplier'=>$request->input("alamat_supplier"),
            'telepon'=>$request->input("telepon"),
        );
        DB::table('supplier')->where('id_supplier', '=', request()->get('id_supplier'))->update($data);
        return Redirect::to('supplier');
    }
}
