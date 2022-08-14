 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['idw'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $idw = ($_GET["idw"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM daftarwisata WHERE idw='$idw'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>

          <section>
            <div class="container px-4 px-lg-5">
                <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Produk <?php echo $data['nama_wisata']; ?></h4>
                        <br>
                         <form method="POST" action="tiket_edit_proses.php?idw=<?php echo $idw; ?>" enctype="multipart/form-data" >
                            <input name="id" value="<?php echo $data['idw']; ?>"  hidden />
                            <div class="form-group ">
                                <label for="exampleInputName1">Nama Wisata</label>
                                <input type="text" class="form-control" name="nama_wisata" value="<?php echo $data['nama_wisata']; ?>" />
                            </div>
                            <div class="form-group mt-2">
                                <label>Gambar Wisata</label><br>
                                <img src="gambar/<?php echo $data['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                                <input type="file" name="gambar" class="file-upload-default" required=""><br>
                                <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar wisata</i>
                            </div>
                            <br>
                            <br>
                            <div class="form-group mt-2">
                                <label for="exampleTextarea1">Deskripsi</label>
                                 <input type="text" class="form-control" name="deskripsi" value="<?php echo $data['deskripsi']; ?>" />
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputCity1">Link Youtube</label>
                                <input type="text" class="form-control" name="youtube" required=""value="<?php echo $data['youtube']; ?>" />
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputCity1">Harga</label>
                                <input type="text"  class="form-control" name="harga" required="" value="<?php echo $data['harga']; ?>"/>
                            </div>
                            <div>
                            <div>
                            <button type="submit" class="btn btn-primary mr-2 mt-4" style="float: right;" type="submit">Simpan Perubahan</button></button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>  
        </section>