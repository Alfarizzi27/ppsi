@extends('dashboard')

@section('isi')
<!-- Awal Table -->
<div class="container">
  <div class="card-header">
    <h3>Riwayat Penjualan Produk</h3>
  </div>
  <div class="card-body">
    <div class="bg-white shadow-sm rounded table-responsive" style="padding: 20px;">
      <table id="riwayatpenjualan" class="table" class="display">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Id Penjualan</th>
            <th scope="col">tanggal_penjualan</th>
            <th scope="col">jumlah_pembelian</th>
            <th scope="col">harga_jual_produk</th>
            <th scope="col">total_harga</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          ?>
          @foreach($riwayatpenjualan as $result)
          <tr>
            <td><?php echo $i++; ?></td>
            <td>{{ $result->id_penjualan}}</td>
            <td>{{ $result->tanggal_penjualan}}</td>
            <td>{{ $result->jumlah_pembelian}}</td>
            <td>{{ $result->harga_jual_produk}}</td>
            <td>{{ $result->total_harga}}</td>
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