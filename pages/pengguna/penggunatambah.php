<div id="top" class="row mb-3">
    <div class="col">
        <h3>Tambah Data Pengguna Sistem</h3>
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

        if(isset($_POST["simpan_button"])){
            $nama = $_POST["nama"];
            $username = $_POST["username"];
            $password = md5($_POST['password']);
            $level = $_POST["level"];

            $sudahada = false;
            $checkSQL = "SELECT * FROM pengguna WHERE nama = '$nama'";
            $resultCheck = mysqli_query($connection, $checkSQL);
            if(mysqli_num_rows($resultCheck) > 0){
                $sudahada = true;
            }

        if ($sudahada) {
            ?>
                <div class="alert alert-danger" role="alert">
                    <i class="fa fa-exclamation-circle"></i>
                    Nama pengguna Sama Sudah Ada
                </div>
                <?php
        } else {
            $insertSQL = "INSERT INTO pengguna SET 
                nama = '$nama',
                username = '$username',
                password = '$password',
                level = '$level'";
            $result = mysqli_query($connection, $insertSQL);
            if (!$result){
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
                    Data Berhasil Disimpan
                </div>
            <?php    
            }
        }
    }
        ?>
    </div>
</div>
<div id="inputan" class="row mb-3">
    <div class="col">
        <div class="card px-3 py-3">
            <form action="" method="post">
                <div class="mb-3 mt-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="level" class="form-label">Level</label>
                    <select class="form-select" aria-label="Default select example" name="level">
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