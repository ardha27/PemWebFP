<?php
    $title ="Dashboard Admin";
    require "includes/header.php";

    $query1 = mysqli_query($conn, "SELECT COUNT(id_barang) AS Jumlah FROM barang");
    $jumlah = mysqli_fetch_assoc ($query1);
    $query2 = mysqli_query($conn, "SELECT COUNT(id_kategori) AS Jumlah FROM kategori");
    $kategori = mysqli_fetch_assoc ($query2);
    $query3 = mysqli_query($conn, "select barang .*, penjualan.* from penjualan left join barang on barang.id_barang = penjualan.id_barang");
    $penjualan = mysqli_fetch_assoc ($query3);
    $query4 = mysqli_query($conn, "SELECT COUNT(id_penjualan) AS Jumlah FROM penjualan");
    $transaksi = mysqli_fetch_assoc ($query4);
    $total = 0;
    if(mysqli_num_rows($query3) > 0) {

        do {
            $total += $penjualan['harga_barang'] * $penjualan['qty_penjualan'];
        }while($penjualan = mysqli_fetch_assoc($query3));
    }
?>

<div class="container-fluid">

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
</ol>

<div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5"><?=$jumlah['Jumlah'];?> Menu</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?=BASE_URL;?>admin/barang.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
  <i class="fas fa-angle-right"></i>
</span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><?=$kategori['Jumlah'];?> Kategori</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?=BASE_URL;?>admin/Kategori.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
  <i class="fas fa-angle-right"></i>
</span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><?=$transaksi['Jumlah'];?> Transaksi</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?=BASE_URL;?>admin/penjualan.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
  <i class="fas fa-angle-right"></i>
</span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Penjualan : Rp. <?=number_format($total);?></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?=BASE_URL;?>admin/penjualan.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
  <i class="fas fa-angle-right"></i>
</span>
            </a>
        </div>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-chart-area"></i> Area Chart Example</div>
    <div class="card-body">
        <canvas id="myAreaChart" width="100%" height="30"></canvas>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

</div>

</div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" >Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?=BASE_URL;?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?=BASE_URL;?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=BASE_URL;?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?=BASE_URL;?>assets/vendor/chart.js/Chart.min.js"></script>
<script src="<?=BASE_URL;?>assets/vendor/datatables/jquery.dataTables.js"></script>
<script src="<?=BASE_URL;?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="<?=BASE_URL;?>assets/js/sb-admin.min.js"></script>
<script src="<?=BASE_URL;?>assets/js/demo/datatables-demo.js"></script>
<script src="<?=BASE_URL;?>assets/js/demo/chart-area-demo.js"></script>

</body>

</html>