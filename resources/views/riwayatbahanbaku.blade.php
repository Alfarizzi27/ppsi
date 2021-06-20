@extends('dashboard')

@section('isi')
<!-- Awal Table -->
<div class="container">
  <div class="card-header">
    <h3>Riwayat Penjualan Bahan Baku</h3>
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