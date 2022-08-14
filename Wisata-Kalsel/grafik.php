<?php 
require('koneksi.php');
$tahun = date('Y-m-d');
$tanggal = date('Y-m-d');
$month = [1,2,3,4,5,6,7,8,9,10,11,12];
$jan = mysqli_query($koneksi,"SELECT * FROM daftartransaksi WHERE YEAR(tanggal) = '$tahun' AND MONTH(tanggal) = 01");
$feb = mysqli_query($koneksi,"SELECT * FROM daftartransaksi WHERE YEAR(tanggal) = '$tahun' AND MONTH(tanggal) = 02");
$mar = mysqli_query($koneksi,"SELECT * FROM daftartransaksi WHERE YEAR(tanggal) = '$tahun' AND MONTH(tanggal) = 03");
$apr = mysqli_query($koneksi,"SELECT * FROM daftartransaksi WHERE YEAR(tanggal) = '$tahun' AND MONTH(tanggal) = 04");
$mei = mysqli_query($koneksi,"SELECT * FROM daftartransaksi WHERE YEAR(tanggal) = '$tahun' AND MONTH(tanggal) = 05");
$jun = mysqli_query($koneksi,"SELECT * FROM daftartransaksi WHERE YEAR(tanggal) = '$tahun' AND MONTH(tanggal) = 06");
$jul = mysqli_query($koneksi,"SELECT * FROM daftartransaksi WHERE YEAR(tanggal) = '$tahun' AND MONTH(tanggal) = 07");
$agu = mysqli_query($koneksi,"SELECT * FROM daftartransaksi WHERE YEAR(tanggal) = '$tahun' AND MONTH(tanggal) = 08");
$sep = mysqli_query($koneksi,"SELECT * FROM daftartransaksi WHERE YEAR(tanggal) = '$tahun' AND MONTH(tanggal) = 09");
$okt = mysqli_query($koneksi,"SELECT * FROM daftartransaksi WHERE YEAR(tanggal) = '$tahun' AND MONTH(tanggal) = 10");
$nov = mysqli_query($koneksi,"SELECT * FROM daftartransaksi WHERE YEAR(tanggal) = '$tahun' AND MONTH(tanggal) = 11");
$des = mysqli_query($koneksi,"SELECT * FROM daftartransaksi WHERE YEAR(tanggal) = '$tahun' AND MONTH(tanggal) = 12");
$penjualan = [mysqli_num_rows($jan),mysqli_num_rows($feb),mysqli_num_rows($mar),mysqli_num_rows($apr),mysqli_num_rows($mei),mysqli_num_rows($jun),mysqli_num_rows($jul),mysqli_num_rows($agu),mysqli_num_rows($sep),mysqli_num_rows($okt),mysqli_num_rows($nov),mysqli_num_rows($des)];
?>

    <div class="container px-4 px-lg-5">
            <!-- Judul-->
        <div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body"><h4 class="text-white m-0">Grafik Penjualan Tiket Per Bulan</h4></div>
        </div>
    </div>
<!-- Menampilkan grafik penjualan tiket -->
<section>
    <div class="container px-4 px-lg-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center">Grafik Penjualan</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart" width="400" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Menampilkan grafik penjualan tiket selesai-->

<script>

var penjualan = <?= json_encode($penjualan); ?>;
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober','November','Desember'],
        datasets: [{
            label: 'Penjualan',
            data: penjualan,
            backgroundColor: [
                'rgba(66, 197, 245, 0.2)'
            ],
            borderColor: [
                'rgba(66, 230, 245, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                display:true,
                beginAtZero: false,
                ticks:{
                    precision:0
                }
            }
        }
    }
});

</script>