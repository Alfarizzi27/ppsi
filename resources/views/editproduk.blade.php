@extends('dashboard')

@section('isi')
<div class="container">
    <div class="card-header">
        <h3>Form Produk</h3>
    </div>
    <div class="card-body">
        <form action="{{url('/formproduk/update/[$produk->id_produk]')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Id Produk</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="Text" name="id_produk" value="{{$produk->id_produk}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Produk</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" name="nama_produk" value="{{$produk->nama_produk}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Stock Produk</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" name="stock_produk" value="{{$produk->stock_produk}}" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Harga Produk</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control date-picker" type="text" name="harga_produk" value="{{$produk->harga_produk}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Deskeripsi Produk</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" name="deskripsi" value="{{$produk->Deskripsi_produk}}">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <button type="submit" class="btn-lg">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection