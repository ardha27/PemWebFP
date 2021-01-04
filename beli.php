<?php
    $title= "Beli Produk";
    require "includes/header.php";

?>

<main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detail Pembeli</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Detail Pembeli</li>
          </ol>
        </div>

      </div>
    </section>

    <section class="inner-page">
      <div class="container">
      <form action="bayar.php" method="post">
    <div class="row">
        <div class="col-md-4">
        <h2>Isi Detail Informasi</h2>
            <div class="form-group">
                <div class="form-label-group">
                    <label for="">Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <label for="">No. Telp</label>
                    <input class="form-control" type="text" name="phone" placeholder="No. Telp" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <label for="">Alamat Lengkap</label>
                    <textarea class="form-control" name="alamat" placeholder="Alamat Lengkap" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <input class="btn btn-sm btn-success" type="submit" name="bayar" value="Bayar Sekarang">
                <input type="hidden" name="qty" value="<?=$_POST['qty'];?>">
                <input type="hidden" name="id" value="<?=$_POST['id'];?>">
            </div>
        </div>
           
    </div>
</form>
      </div>
    </section>

  </main><!-- End #main -->



<?php
    require "includes/footer.php";
?>