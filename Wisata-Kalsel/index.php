<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Wisata Kalimantan Selatan</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php">Wisata Kalimantan Selatan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?page=wisata">Wisata</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?page=tiket">Tiket</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?page=penjualan">Penjualan</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?page=grafik">Grafik Penjualan</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- inisialisasi navbar -->
        <?php
        if (isset($_GET['page'])){
            $page = $_GET['page'];
            if($page == 'wisata'){
                include('wisata.php');
            }
            else if ($page == 'tambahw'){
                include('tambahw.php');
            }
            else if ($page == 'penjualan'){
                include('penjualan.php');
            }
            else if ($page == 'detail'){
                include('detail.php');
            }
            else if ($page == 'tiket'){
                include('tiket.php');
            }
                else if ($page == 'tiket_edit'){
                include('tiket_edit.php');
            }
            else if ($page == 'grafik'){
                include('grafik.php');
            } else if ($page == 'hapus'){
                include('hapus.php');
            } 
        } else {
        ?>

        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-6"><img src="assets/img/logo kalsel.png" height="250px" style="display: block; margin: auto;"></div>
                    <div class="col-lg-5">
                        <h1 class="font-weight-light">Selamat Datang</h1>
                        <p>Website khusus wisata Daerah Kalimantan Selatan, Banjarmasin - Banjarbaru</p>
                    </div>
                </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                        <img src="assets/img/jembatan.jpg" height="200px" style="display: block; margin: auto;">
                        <h4 class="card-title mt-4 mb-3">Jembatan Barito</h4>
                            <p class="card-text">Jembatan Barito juga tidak kalah populer dari tempat wisata lainnya, terlebih jika Anda berkunjung saat sore atau malam hari. Jembatan yang menghubungkan antara tepi timur sungai Barito dan tepi baratnya ini, pada sore hari akan menyuguhkan pemandangan matahari terbenam yang begitu mempesona.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body ">
                            <img src="assets/img/air.jpg" height="200px" style="display: block; margin: auto;">
                            <h4 class="card-title mt-4 mb-3">Air Terjun Bajun</h4>
                            <p class="card-text">Tak hanya sungai, ternyata Banjarmasin juga memiliki objek wisata air terjun dan salah satunya yaitu Air Terjun Bajuin. Objek wisata ini berada di kawasan pegunungan Meratus, dan memiliki keindahan yang tidak kalah dari air terjun lainnya. Di sini Anda dapat melihat panorama alam berupa pegunungan yang indah, berpadu dengan udara yang sangat sejuk dengan pepohonan yang membentang di sekitar air terjun.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <img src="assets/img/pulau.jpg" height="200px" style="display: block; margin: auto;">
                            <h4 class="card-title mt-4 mb-3">Pulau Kembang</h4>
                            <p class="card-text">Pulau Kembang menjadi destinasi wisata berikutnya di Banjarmasin yang wajib untuk Anda kunjungi. Pulau ini terletak di tengah tengah sungai Barito, dan merupakan habitat dari kera serta beberapa jenis burung. Jika Anda berkunjung kemari disarankan untuk berhati hati dengan semua barang bawaan, karena kera di sini seringkali penasaran dan cukup jahil terhadap barang yang dibawa pengunjung.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        }
        ?>

        <!-- Footer-->
        <footer>
            <div class="footer"><p class="m-0 text-center text-white">Copyright &copy; Wisata Kalsel 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>