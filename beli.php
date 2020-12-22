<?php
    $title= "Tampil Produk";
    require "includes/header.php";

?>

<form action="beli.php" method="post">
    <div class="row">
        <div class="col-md-3">
        <h2>Isi Detail Informasi</h2>
            <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label for="">No. Telp</label>
                <input class="form-control" type="text" name="phone" placeholder="No. Telp" required>
            </div>
            <div class="form-group">
                <label for="">Alamat Lengkap</label>
                <textarea class="form-control" name="alamat" required></textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-sm btn-success" type="submit" name="bayar" value="Bayar Sekarang">
                <input type="hidden" name="qty" value="<?=$_POST['qty'];?>">
                <input type="hidden" name="id" value="<?=$_POST['id'];?>">
            </div>
        </div>
           
    </div>
</form>

<?php
    require "includes/footer.php";
?>