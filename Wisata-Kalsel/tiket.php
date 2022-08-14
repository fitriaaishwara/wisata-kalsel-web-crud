<?php
require ('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM daftarwisata ORDER BY idw ASC");
?>

    <div class="container px-4 px-lg-5">
            <!-- Judul-->
        <div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body"><h4 class="text-white m-0">Harga Tiket</h4></div>
        </div>
    </div>
<!-- Menampilkan tabel data harga -->
<section>
    <div class="container px-4 px-lg-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Daftar Harga Tiket</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>Nama Tempat Wisata</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                            <?php $i = 1; ?>
                        <?php while($row = mysqli_fetch_array($query)) : ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $row['nama_wisata'] ?></td>
                                <td><?= $row['harga'] ?></td>
                                 <th>
                                    <a href="index.php?page=tiket_edit&idw=<?= $row['idw'] ?>" class="btn btn-success btn-sm">Edit Harga</a>
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
<!-- tabel data harga selesai -->