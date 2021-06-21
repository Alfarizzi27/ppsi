@extends('dashboard')

@section('isi')
<!-- Awal Table -->
<div class="container">
  <div class="card-header">
    <h3>Daftar Penjualan</h3>
    <button class="btn btn-success" style="width: 8%;">
      <a href="{{url('formproduk')}}" style="color: white;">Tambah</a>
    </button>
  </div>
  <div class="card-body">
    <div class="bg-white shadow-sm rounded table-responsive" style="padding: 20px;">
      <table id="dataproduk" class="table" class="display">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Id Penjulan </th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Stock Produk</th>
            <th scope="col">Harga Produk</th>
            <th scope="col">Deskripsi Produk</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          ?>
          @foreach($produk as $result)
          <tr>
            <td><?php echo $i++; ?></td>
            <td>{{ $result->id_produk}}</td>
            <td>{{ $result->nama_produk}}</td>
            <td>{{ $result->stock_produk}}</td>
            <td>{{ $result->harga_produk}}</td>
            <td>{{ $result->Deskripsi_produk}}</td>
            <td>
                <button type="button" class="btn btn-primary" onclick="window.location='formproduk/edit/{{$result->id_produk}}'">Update </button>
                <button type="button" class="btn btn-danger" onclick="window.location='formproduk/delete/{{$result->id_produk}}'">Delete</button>
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