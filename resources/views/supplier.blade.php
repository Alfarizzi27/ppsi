@extends('dashboard')

@section('isi')
<!-- Awal Table -->
<div class="container">
  <div class="card-header">
    <h3>Daftar Produk</h3>
    <button class="btn btn-success" style="width: 8%;">
      <a href="{{url('formsupplier')}}" style="color: white;">Tambah</a>
    </button>
  </div>
  <div class="card-body">
    <div class="bg-white shadow-sm rounded table-responsive" style="padding: 20px;">
      <table id="dataproduk" class="table" class="display">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Id Suplier</th>
            <th scope="col">Nama Supplier</th>
            <th scope="col">Alamat Supplier</th>
            <th scope="col">Telepon</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          ?>
          @foreach($supplier as $result)
          <tr>
            <td><?php echo $i++; ?></td>
            <td>{{ $result->id_supplier}}</td>
            <td>{{ $result->nama_supplier}}</td>
            <td>{{ $result->alamat_supplier}}</td>
            <td>{{ $result->telepon}}</td>
            <td>
                <button type="button" class="btn btn-primary" onclick="window.location='formsupplier/edit/{{$result->id_supplier}}'">Update </button>
                <button type="button" class="btn btn-danger" onclick="window.location='formsupplier/delete/{{$result->id_supplier}}'">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Akhir Table -->

@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function() {
    $('#dataproduk').DataTable();
  });
</script>
@endsection