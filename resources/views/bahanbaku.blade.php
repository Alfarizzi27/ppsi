@extends('dashboard')

@section('isi')
<!-- Awal Table -->
<div class="container">
  <div class="card-header">
    <h3>Daftar Bahan Baku</h3>
    <button class="btn btn-success" style="width: 8%;">
      <a href="{{url('formbahanbaku')}}" style="color: white;">Tambah</a>
    </button>
  </div>
  <div class="card-body">
    <div class="bg-white shadow-sm rounded table-responsive" style="padding: 20px;">
        <table id="dataproduk" class="table" class="display">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Id Bahan Baku</th>
              <th scope="col">Nama Bahan Baku</th>
              <th scope="col">Stock Bahan Baku</th>
              <th scope="col">Harga Bahan Baku</th>
              <th scope="col">Deskripsi Bahan Baku</th>
              <th scope="col">aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            ?>
            @foreach($bahanbaku as $result)
            <tr>
              <td><?php echo $i++; ?></td>
              <td>{{ $result->id_bahan_baku}}</td>
              <td>{{ $result->nama_bahan_baku}}</td>
              <td>{{ $result->stock_bahan_baku}}</td>
              <td>{{ $result->harga_bahan_baku}}</td>
              <td>{{ $result->Deskripsi_bahan_baku}}</td>
              <td>
                <button type="button" class="btn btn-primary" onclick="window.location='formbahanbaku/edit/{{$result->id_bahan_baku}}'">Update </button>
                <button type="button" class="btn btn-danger" onclick="window.location='formbahanbaku/delete/{{$result->id_bahan_baku}}'">Delete</button>
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