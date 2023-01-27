<div id="top" class="row mb-3">
    <div class="col">
        <h3>Ubah Data Pengguna Sistem</h3>
    </div>
    <div class="col">
        <a href="?page=pengguna" class="btn btn-primary float-end">
            <i class="fa fa-arrow-circle-left"></i>
            Kembali
        </a>
    </div>  
</div>
<div id="pesan" class="row mb-3">
    <div class="col">
        <?php
        include "database/connection.php";

        if (isset($_POST['simpan_button'])) { 
            $id = $_POST["id"];
            $nama = $_POST["nama"];
            $username = $_POST["username"];
            $password = md5($_POST['password']);
            $level = $_POST["level"];

           $updateSQL = "UPDATE pengguna SET
                nama = '$nama',
                username = '$username',
                password = '$password',
                level = '$level'
                WHERE id ='$id'";
            $result = mysqli_query($connection, $updateSQL);
            if (!$result) {
        ?>
            <div class="alert alert-danger" role="alert">
                <i class="fa fa-exclamation-circle"></i>
                <?php echo mysqli_error($connection) ?>
            </div>
            <?php
        } else {
        ?>
            <div class="alert alert-success" role="alert">
                <i class="fa fa-check-circle"></i>
                Ubah Data Berhasil Disimpan
            </div>
        <?php
            }
        }
    
        $id = $_GET["id"];
        $selectSQL = "SELECT * FROM pengguna WHERE id = $id";
        $result = mysqli_query($connection, $selectSQL);
        if (!$result || mysqli_num_rows($result) == 0) {
            echo '<meta http-equiv="refresh" content=0";url=?page=pengguna">';
        }
        $row = mysqli_fetch_assoc($result);
        ?>
    
</div>
<div id="inputan" class="row mb-3">
    <div class="col">
        <div class="card px-3 py-3">
            <form action="" method="post">
                <div class="mb-3 mt-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $id ?>" readonly>
                </div>
                <div class="mb-3 mt-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="<?php echo $row['nama'] ?>" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" value="<?php echo $row['username'] ?>" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password" value="<?php echo $row['password'] ?>" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="level" class="form-label">Level</label>
                    <select class="form-select" aria-label="Default select example" name="level" >
                        <option value="">-- Pilih --</option>
                        <option value="Administrator">Administrator</option>
                        <option value="Pimpinan">Pimpinan</option>
                        <option value="Wakil Pimpinan">Wakil Pimpinan</option>
                    </select>  
                </div>
                <div class="col mb-3 mt-3">
                    <button class="btn btn-success" type="submit" name="simpan_button">
                        <i class="fas fa-save"></i>
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>