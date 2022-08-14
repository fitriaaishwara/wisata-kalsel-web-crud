<?php
	include "koneksi.php";
    include "create_message.php";
	$sql = "INSERT INTO daftartransaksi (nama,no_identitas,no_hp,tanggal,jml,jml_anak,nama_wisata,total_harga)
		VALUES ('".$_POST['nama']."','".$_POST['no_identitas']."','".$_POST['no_hp']."','".$_POST['tanggal']."','".$_POST['jml']."',
        '".$_POST['jml_anak']."','".$_POST['nama_wisata']."','".$_POST['total_harga']."')";
	if ($koneksi->query($sql) == TRUE) {
        $koneksi->close(); 
        create_message("Data Tersimpan","success","check");
        header("location:index.php?page=penjualan");
        exit();
    } else {
        $koneksi->close();
        create_message("Error: " . $sql . "<br>" . $koneksi->error,"danger","warning");
        header("location:index.php?page=penjualan");
        exit();
    }
?>