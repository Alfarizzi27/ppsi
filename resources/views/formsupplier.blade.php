@extends('dashboard')
@section('isi')
<div class="container">
    <div class="card-header">
        <h3>Form Supplier</h3>
    </div>
    <div class="card-body">
        <form action="{{url('/formsupplier/add')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Supplier</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" name="nama_supplier">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Alamat Supplier</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" name="alamat_supplier">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Telepon</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control date-picker" type="number" name="telepon">
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