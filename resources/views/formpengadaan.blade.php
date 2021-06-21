@extends('dashboard')

@section('isi')
<div class="container">
    <div class="card-header">
        <h3>Form Produk</h3>
    </div>
    <div class="card-body">
        <form action="{{url('/formpengadaan/add')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Id pengadaan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="Text" name="id_pengadaan">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Id Bahan Baku</label>  
                <div class="col-sm-12 col-md-10">
                    <select class="form-control" type="text" name="id_bahan_baku">
                        @foreach($bahan as $row)
                        <option value="{{$row->id_bahan_baku}}">{{$row->nama_bahan_baku}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Pengadaan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="date" name="tanggal_pengadaan">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jumlah Pengadaan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control date-picker" type="text" name="jumlah_pengadaan">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Harga Pengadaan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="number" name="harga_pengadaan">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Supplier</label>
                <div class="col-sm-12 col-md-10">
                    <select class="form-control" type="text" name="id_supplier">
                        @foreach($supplier as $row)
                        <option value="{{$row->id_supplier}}">{{$row->nama_supplier}}</option>
                        @endforeach
                    </select>
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