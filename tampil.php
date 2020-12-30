<!DOCTYPE html>
<html lang="en">

<?php
    $title= "Tampil Produk";
    require "includes/header.php";

    $id = $_GET['id'];
    if(isset($_GET['id'])) {
        $query = mysqli_query ($conn, "select kategori.*, barang.* from barang 
                                left join kategori on kategori.id_kategori = barang.id_kategori
                                where id_barang='$id'");
        $data = mysqli_fetch_assoc ($query);
    }
?>

<main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detail Menu</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><?=$data['nama_barang'];?></li>
          </ol>
        </div>

      </div>
    </section>

    <section id="tampil" class="tampil">
      <div class="container">
      <form action="beli.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 mt-4">
                                <img class="card-img-top" src="<?=BASE_URL;?>assets/barang/<?=$data['gambar_barang'];?>" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="my-4"><?=$data['nama_barang'];?></h1>
                                <h5>Rp. <?=number_format ($data['harga_barang']);?>/<?=$data['satuan_barang'];?></h5>
                                <div class="form-group">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <label for="">Qty:</label>
                                    <input type="number" value="1" name="qty" class="col-lg-2 form-control" required> <br>
                                    <input type="submit" class="btn btn-success btn-sm" name="beli" value="Beli">
                                    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                                </div>
                            </div>
                        </div>
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