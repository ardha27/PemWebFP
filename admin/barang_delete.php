<?php
    require"includes/header.php";
    $id = $_GET['id'];

    $aVar = new mysqli('localhost', 'root', '','online_shop');
    $query = mysqli_query($aVar, "delete from barang where id_barang ='$id'");
    if($query) {
        echo "<meta http-equiv='refresh' content='0, url=".BASE_URL."admin/barang.php'/>";
    }
?>