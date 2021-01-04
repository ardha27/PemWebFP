<?php
    $title= "Bayar Produk";
    require "includes/header.php";

    if(isset($_POST['bayar'])) {
        $nama = $_POST['nama'];
        $telp = $_POST['phone'];
        $alamat = $_POST['alamat'];

        $insert = mysqli_query ($conn, "insert into customer (nama_customer, alamat_customer, telp_customer)
        value ('$nama', '$alamat', '$telp') ");
        if($insert) {
            $cust_id = mysqli_query ($conn, "select id_customer from customer order by id_customer DESC");
            $cust_id2 = mysqli_fetch_assoc($cust_id);
            $customer_id = $cust_id2['id_customer'];
            $qty = $_POST['qty'];
            $id = $_POST['id'];

            $setPenjualan = mysqli_query($conn, "insert into penjualan (qty_penjualan, id_barang, id_customer) value ('$qty', '$id', '$customer_id')");

            if($setPenjualan) {
                $Qbarang = mysqli_query ($conn, "select * from barang where id_barang = '$id'");
                $data = mysqli_fetch_assoc($Qbarang);

?>

<main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
        <h2>Pembayaran</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="tampil.php?id=<?=$data['id_barang'];?>"><?=$data['nama_barang'];?></a></li>
            <li>Pembayaran</li>
          </ol>
        </div>

      </div>
    </section>

    <section class="inner-page">
      <div class="container">
      <div class="row">
        <div class="col-md-12">
        <h2>Detail Pembayaran</h2>
        <table class="table" style="color:grey">
            <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Harga Satuan</th>
                <th>Qty</th>
                <th>Jumlah</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?=$data['nama_barang'];?></td>
                <td>Rp. <?=number_format($data['harga_barang']);?></td>
                <td><?=$qty;?></td>
                <td>Rp. <?=number_format($data['harga_barang'] * $qty);?></td>
            </tr>
            </tbody>
        </table>
            <h3>Total Yang Harus dibayar : Rp. <?=number_format($data['harga_barang'] * $qty);?></h3>
        </div>
        <div class=col-md-12>
        </div>   
    </div>
      </div>
    </section>

  </main><!-- End #main -->


<?php
            }       
        }
    }
?>

<?php
    require "includes/footer.php";
?>