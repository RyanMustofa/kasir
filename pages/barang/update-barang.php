
<?php
include "../../db/koneksi.php";
if(isset($_POST['submit'])){
    $key = $_GET['key'];
    $kode_barcode = $_POST['kode_barcode'];
    $nama_barang = $_POST['nama_barang'];
    $satuan = $_POST['satuan'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $harga_jual = $_POST['harga_jual'];
    $profit = $_POST['profit'];

    $sql = "UPDATE `tb_barang` SET `kode_barcode` = '$kode_barcode', `nama_barang` = '$nama_barang', `satuan` = '$satuan', `harga_beli` = '$harga_beli', `stok` = '$stok', `harga_jual` = '$harga_jual', `profit` = '$profit' WHERE `tb_barang`.`kode_barcode` = '$key';";
    $query = mysqli_query($conn,$sql);
    if($query){
        echo "
        <script>
            alert('success')
            window.location = './barang.php'
        </script>";
    }else{
        echo "
        <script>
            alert('koneksi error atau kode sudah ada')
        </script>";
    }
}
?>
