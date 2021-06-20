@extends('dashboard')

@section('isi')
<div class="container">
    <div class="card-header">
        <h3>Form Bahan Baku</h3>
    </div>
    <div class="card-body">
        <form action="{{url('/formbahanbaku/add')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Id Bahan Baku</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="Text" name="id_bahan_baku">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Bahan Baku</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" name="nama_bahan_baku">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Stock Bahan Baku</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" name="stock_bahan_baku">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Harga Bahan Baku</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control date-picker" type="text" name="harga_bahan_baku">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Deskeripsi Bahan Baku</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" name="deskripsi">
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