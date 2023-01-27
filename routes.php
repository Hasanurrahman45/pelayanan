<?php

if(isset($_GET['page'])){
    $page = $_GET['page'];
} else {
    $page = "";
}

switch ($page) {
    case"":
    case "dashboard":
        include "pages/dashboard.php";
        break;
    case "pelanggan":
        include "pages/pelanggan/pelanggan.php";
        break;
    case "pelanggantambah":
        include "pages/pelanggan/pelanggantambah.php";
        break;
    case "pelangganhapus":
        include "pages/pelanggan/pelangganhapus.php";
        break;
    case "pelangganubah":
        include "pages/pelanggan/pelangganubah.php";
        break;
    case "karyawan":
        include "pages/karyawan/karyawan.php";
        break;
    case "karyawantambah":
        include "pages/karyawan/karyawantambah.php";
        break;
    case "karyawanhapus":
        include "pages/karyawan/karyawanhapus.php";
        break;
    case "karyawanubah":
        include "pages/karyawan/karyawanubah.php";
        break;
    case "pilihbulantahunpenggajian":
        include "pages/penggajian/pilihbulantahunpenggajian.php";
        break;
    case "penggajian":
        include "pages/penggajian/penggajian.php";
        break;
    case "pilihkaryawanpenggajian":
        include "pages/penggajian/pilihkaryawanpenggajian.php";
        break;
    case "penggajiantambah":
        include "pages/penggajian/penggajiantambah.php";
        break;
    case "penggajianhapus":
        include "pages/penggajian/penggajianhapus.php";
        break;
    case "pengguna":
        include "pages/pengguna/pengguna.php";
        break;
    case "penggunatambah":
        include "pages/pengguna/penggunatambah.php";
        break;
    case "penggunahapus":
        include "pages/pengguna/penggunahapus.php";
        break;
    case "penggunaubah":
        include "pages/pengguna/penggunaubah.php";
        break;
    default:
    include "pages/404.php";
}