<?php
require ('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM daftartransaksi ORDER BY id DESC");
?>

    <div class="container px-4 px-lg-5">
            <!-- Judul-->
        <div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body"><h4 class="text-white m-0">Data Pesanan Tiket</h4></div>
        </div>
    </div>
<!-- Menampilkan tabel pesanan tiket -->
<section>
    <div class="container px-4 px-lg-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Data Pesanan</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>Nama Wisata</th>
                                <th>Nama</th>
                                <th>No. Identitas</th>
                                <th>No. Hp</th>
                                <th>Tanggal Kunjungan</th>
                                <th>Dewasa</th>
                                <th>Anak</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                            <?php $i = 1; ?>
                        <?php while($row = mysqli_fetch_array($query)) : ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $row['nama_wisata'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['no_identitas'] ?></td>
                                <td><?= $row['no_hp'] ?></td>
                                <td><?= $row['tanggal'] ?></td>
                                <td><?= $row['jml'] ?></td>
                                <td><?= $row['jml_anak'] ?></td>
                                <td><?= $row['total_harga'] ?></td>
                                <th>
                                    <a href="index.php?page=hapus&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus data ini?')">Hapus</a>
                                </th>
                            </tr>
                            <?php $i++; ?>
                            <?php endwhile; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tabel pesanan tiket selesai-->