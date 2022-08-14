<?php
	include('koneksi.php');
	$datawisata = "select * from daftarwisata where idw =".$_GET['idw'];
	foreach($koneksi->query($datawisata) as $value){
        $data_vc=$value;
    } ;
?>

<section>
<div class="container px-4 px-lg-5">
    <!-- tampilan detail wisata -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h1><?php echo $data_vc['nama_wisata']?></h1>
                        <img class="mt-4 mb-3" src="gambar/<?php echo $data_vc['gambar']?>" alt="" class="img-fluid">
                    </center>
                    
                    <p>
                        <?php echo $data_vc['deskripsi']?>
                    </p>
                     <center>
                    <h5 class="mt-4 mb-2">Video</h5>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?php echo $data_vc['youtube']?>" allowfullscreen></iframe>
                    </div>
                    </center>
                </div>
            </div>
        </div>
        <!-- tampilan detail wisata selesai -->
        <div class="col-lg">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title text-center mb-4">Informasi</div>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between">
                                    <span class="font-weight-bold">Harga</span>
                                    <span class="font-italic"><?php echo $data_vc['harga']?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tampilan form beli tiket -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title text-center mb-4">Form Pemesanan</div>
                            <form action="tambahp.php"method="post">
                                <input type="text" name="nama_wisata" hidden value="<?= $data_vc['nama_wisata'] ?>" id="nama_wisata">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_identitas">No. Identitas(NIK)</label>
                                    <input type="text" name="no_identitas" class="form-control" id="no_identitas"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No. Hp</label>
                                    <input type="text" name="no_hp" class="form-control" id="no_hp" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal Kunjungan</label>
                                    <input type="date" name="tanggal" min="<?= date('Y-m-d') ?>" class="form-control" id="tanggal" required>
                                </div>
                                <div class="form-group">
                                    <label for="jml">Jumlah Pengunjung (Dewasa)</label>
                                    <input type="number" name="jml" class="form-control" id="jml" required>
                                </div>
                                <div class="form-group">
                                    <label for="jml_anak">Pengunjung Anak dibawah usia 12 tahun</label>
                                    <input type="number" name="jml_anak" class="form-control" id="jml_anak" required>
                                </div>
                                <div class="form-group">
							        <label for="harga">Harga Tiket </label>
							        <input type="Text" class="form-control" id="harga" name="harga" value="<?php echo $data_vc['harga']?>" Readonly>
						        </div>
						        <div class="form-group">
							        <label for="total_harga">Total Bayar </label>
							        Rp. <span type="text" id="total_harga"></span> 
							        <input type="hidden" name="total_harga" id="total2">
						        </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="setuju" required> Saya dan/ atau rombongan
                                            memahami dan setuju berdasarkan syarat dan ketentuan yang telah
                                            ditetapkan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <input type="button" class="btn btn-block btn-success" onclick="total()" value="Hitung Total Bayar" required>
                                        <button name="pesan" class="btn btn-block btn-primary" type="submit">Pesan</button>
                                        <a href="index.php?page=wisata" class="btn btn-block btn-danger" style="float: right;">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tampilan form beli tiket selesai -->
        </div>
    </div>
</div>
</section>
 <!-- function menghitung total -->
	<script>
		function total() {
			var a = document.getElementById("jml").value;
			var b = document.getElementById("jml_anak").value;
			var c = document.getElementById("harga").value;
			document.getElementById("total_harga").innerHTML = (a*c)+(b*(c/2));
			document.getElementById('total2').value = (a*c)+(b*(c/2));
		}
		
	</script>