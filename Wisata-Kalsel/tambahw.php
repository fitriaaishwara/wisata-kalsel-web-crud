<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
?>

        <section>
            <div class="container px-4 px-lg-5">
                <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Data Wisata</h4>
                        <br>
                        <form method="POST" action="tambahw_proses.php" enctype="multipart/form-data" >
                            <div class="form-group ">
                                <label for="exampleInputName1">Nama</label>
                                <input type="text" class="form-control" name="nama_wisata" autofocus="" required="" />
                            </div>
                            <div class="form-group mt-2">
                                <label>Gambar Wisata</label>
                                <input type="file" name="gambar" class="file-upload-default" required="">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleTextarea1">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi"></textarea>
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputCity1">Link Youtube</label>
                                <input type="text" class="form-control" name="youtube" required="">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputCity1">Harga</label>
                                <input type="text"  class="form-control" name="harga" required="">
                            </div>
                            <div>
                            <div>
                            <a href="index.php?page=wisata" class="btn btn-block btn-danger mt-4" style="float: right;">Batal</a>
                            <button type="submit" class="btn btn-primary mr-2 mt-4" style="float: right;">Simpan Data</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>  
        </section>