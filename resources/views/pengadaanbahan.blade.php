@extends('dashboard')

@section('isi')
<!-- Awal Table -->
<div class="container">
  <div class="card-header">
    <h3>Pembelian bahan produk</h3>
    <button class="btn btn-success" style="width: 8%;">
      <a href="{{url('formpengadaan')}}" style="color: white;">Tambah</a>
    </button>
  </div>
  <div class="card-body">
    <div class="bg-white shadow-sm rounded table-responsive" style="padding: 20px;">
      <table id="riwayatpenjualan" class="table" class="display">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Id Pengadaan</th>
            <th scope="col">Id Bahan Baku</th>
            <th scope="col">Tanggal Pengadaan</th>
            <th scope="col">Jumlah Pengadaan</th>
            <th scope="col">Harga Pengadaan</th>
            <th scope="col">Supplier</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          ?>
          @foreach($pengadaanbahan as $result)
          <tr>
            <td><?php echo $i++; ?></td>
            <td>{{ $result->id_pengadaan}}</td>
            <td>{{ $result->id_bahan_baku}}</td>
            <td>{{ $result->tanggal_pengadaan}}</td>
            <td>{{ $result->jumlah_pengadaan}}</td>
            <td>{{ $result->harga_pengadaan}}</td>
            <td>{{ $result->id_supplier}}</td>
            <td>
                <button type="button" class="btn btn-primary" onclick="window.location='formpengadaan/edit/{{$result->id_pengadaan}}'">Update </button>
                <button type="button" class="btn btn-danger" onclick="window.location='formpengadaan/delete/{{$result->id_pengadaan}}'">Delete</button>
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
    $('#riwayatpenjualan').DataTable();
  });
</script>
@endsection