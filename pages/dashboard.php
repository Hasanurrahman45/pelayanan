<?php
include 'database/connection.php';
include 'database/fungsi.php';

if (isset($_SESSION['error'])) {
?>
    <div class="alert alert-danger" role="alert">
        <i class="fa fa-exclamation-circle"></i>
        <?= $_SESSION['error']; ?>
    </div>
<?php
    unset($_SESSION['error']);
}


$qry_jumlah_pelanggan = 'SELECT COUNT(*) as jumlah_pelanggan FROM pelanggan';
$result_qry_jumlah_pelanggan = mysqli_query($connection, $qry_jumlah_pelanggan);
$data_jumlah_pelanggan = mysqli_fetch_assoc($result_qry_jumlah_pelanggan);




?>

<div class="row g-3 my-2">
    <div class="col-md-12 col-lg-4">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2"><?= $data_jumlah_pelanggan['jumlah_pelanggan'] ?></h3>
                <p class="fs-5">Pelanggan</p>
            </div>
            <i class="fas fa-building fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>


</div>