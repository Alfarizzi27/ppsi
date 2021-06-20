@extends('dashboard')

@section('isi')
<!-- Awal Table -->
<div class="container">
  <div class="card-header">
    <h3>Pembelian bahan produk</h3>
  </div>
  <div class="card-body">
    <div class="bg-white shadow-sm rounded table-responsive" style="padding: 20px;">
      <table id="riwayatpenjualan" class="table" class="display">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Id Pemesanan</th>
            <th scope="col">Nama Pemesanan</th>
            <th scope="col">Pemesanan Jenis Barang</th>
            <th scope="col">Tanggal Pemesanan</th>
            <th scope="col">Jumlah Pemesanan</th>
            <th scope="col">Keterangan Pemesanan</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          ?>
          @foreach($pengadaanbahan as $result)
          <tr>
            <td><?php echo $i++; ?></td>
            <td>{{ $result->id_pemesanan}}</td>
            <td>{{ $result->nama_pesanan}}</td>
            <td>{{ $result->pemesanan_jenis_barang}}</td>
            <td>{{ $result->tanggal_pemesanan}}</td>
            <td>{{ $result->jumlah_pemesanan}}</td>
            <td>{{ $result->keterangan_pemesanan}}</td>
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