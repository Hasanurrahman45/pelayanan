<?php 
include "database/connection.php";
?>
<div class="row mt-3">
    <div class="col">
        <h3>Data Pengguna Sistem</h3>
    </div>
    <div class="col">
        <a href="?page=penggunatambah" class="btn btn-success float-end">
            <i class="fa fa-plus-circle"></i>
            Tambah
        </a>
    </div>
</div>    
    <div class="row mt-3">
        <div class="col">
            <?php
            $selectSQL = "SELECT * FROM pengguna";
            $result = mysqli_query($connection, $selectSQL);

            if (!$result) {
            ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo mysqli_error($connection) ?>
                </div>
            <?php
                return;
            }
            if (mysqli_num_rows($result) == 0){
            ?>
                <div class="alert alert-light" role="alert">
                    Data Kosong
                </div>
            <?php
                return;
            }
            ?>
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Level</th>
                        <th scope="col" width="200">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr class="align-middle">
                            <td>
                                <?php echo $no++ ?>
                            </td>
                            <td>
                                <?php echo $row["nama"] ?>
                            </td>
                            <td>
                                <?php echo $row["username"] ?>
                            </td>
                            <td>
                                <?php echo $row["level"] ?>
                            </td>
                            <td>
                                <a href="?page=penggunaubah&id=<?php echo $row["id"] ?>" class="btn btn-primary">
                                    <i class="fa fa-edit"></i>
                                    
                                </a>
                                <a href="?page=penggunahapus&id=<?php echo $row["id"] ?>"
                                    onclick="javascript: return confirm('Konfirmasi Data Akan Dihapus?');"
                                    class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                    
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
    </div>
</div>