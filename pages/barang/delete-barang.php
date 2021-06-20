<?php
include "../../db/koneksi.php";
$key = $_GET['key'];
$sql = mysqli_query($conn, "DELETE FROM tb_barang WHERE kode_barcode='$key'");
if ($sql) {
    echo "
        <script>
            alert('success')
            window.location = './barang.php'
        </script>";
} else {
    echo "
        <script>
            alert('koneksi error atau kode sudah ada')
        </script>";
}
?>
