<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-icons/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/datatables/min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('assets/datatables/datatables.css')}}">
    
    <title>BATIK ROYYAN COLLECTION</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img src="" alt="" width="50" height="50" class="d-inline-block align-text-top"><i class=""></i>
            </div>
            
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active" onclick="window.location='home'"><i class="fas fa-home me-2"></i>Home</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" onclick="window.location='produk'"><i class="fas fa-address-card me-2"></i>Data Produk</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" onclick="window.location='bahanbaku'"><i class="fas fa-address-card me-2"></i>Data Bahan Baku</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" onclick="window.location='bahanbaku'"><i class="fas fa-address-card me-2"></i>Penjualan Produk</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" onclick="window.location='bahanbaku'"><i class="fas fa-address-card me-2"></i>Penjualan Bahan Baku</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" onclick="window.location='bahanbaku'"><i class="fas fa-address-card me-2"></i>Data Produksi</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" onclick="window.location='bahanbaku'"><i class="fas fa-address-card me-2"></i>Data Keuangan</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold" onclick="window.location='bahanbaku'"><i class="fas fa-address-card me-2"></i>Data Pengadaan</a>
            </div>
        </div>
        <!-- Akhir sidebar -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">ROYYAN COLLECTION</h2>
                </div>
            </nav>
            <!--isi content-->
            @yield('isi')
            <!--  -->
        </div>
        <!-- Akhir page content -->
    </div>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/mdb/js/mdb.min.js')}}"></script>
    <script src="{{asset('assets/datatables/jquery.js')}}"></script>
    <script src="{{asset('assets/datatables/min.js')}}"></script>
    <script src="{{asset('assets/datatables/jsbootstrap5.js')}}"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
    <!--isi script-->
    @yield('script')
    <!--  -->
</body>

</html>