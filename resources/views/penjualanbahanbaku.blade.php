@extends('dashboard')

@section('isi')
<div class="container">
    <div class="card-header">
        <h3>PENJUALAN BAHAN BAKU</h3>
    </div>
  <div class="row">
    <div class="col-4 col-sm-4">
    <form>
        <input type="text" class="form-control" placeholder="NAMA CUSTOMER" value="" style="width: 200px; margin-top: 10px;">
    </form>

    <div class="card" style="margin-top: 10px; height:400px;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th class="text-right">Price</th>
                </tr>
            </thead>
            <tbody>
          
            </tbody>
        </table>
    </div>

    <div class="col-12 col-sm-12">
        <p>Total: </p>
        <button type="button" class="btn btn-danger" style="width: 150px; margin-right: 50px">Cancel</button>
        <button type="button" class="btn btn-primary" style="width: 150px; float: right;">Submiit</button>

    </div>


    </div>

    <div class="col-7 col-sm-7" style="margin-left: 20px;">
    <form>
        <input type="text" class="form-control" placeholder="NAMA PRODUK" value="" style="margin-top: 10px;">
    </form>
    </div>
  </div>
</div>
@endsection