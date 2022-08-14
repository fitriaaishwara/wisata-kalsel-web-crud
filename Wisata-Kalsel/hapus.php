<?php
require('koneksi.php');
$id = $_GET['id'];
if($id)
{
    $query = mysqli_query($koneksi,"DELETE FROM daftartransaksi WHERE id='$id'");
    echo "
    <script>
        alert('Penjualan berhasil dihapus.');
        window.location.href = 'index.php?page=penjualan'; 
    </script>
    "; 
}else{
    header('Location: index.php');
}