<div id="top" class="row mb-3">
    <div class="col">
        <h3>Ubah Data Pelanggan</h3>
    </div>
    <div class="col">
        <a href="?page=pelanggan" class="btn btn-primary float-end">
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
            $nik = $_POST["nik"];
            $nama = $_POST["nama"];
            $tempat = $_POST["tempat"];
            $tgl_lahir = $_POST["tgl_lahir"];
            $jekel = $_POST["jekel"];
            $alamat_rumah = $_POST["alamat_rumah"];
            $rt_rw = $_POST["rt_rw"];
            $agama = $_POST["agama"];
            $type = $_POST["type"];

           $updateSQL = "UPDATE pelanggan SET
                nik = '$nik',
                nama = '$nama',
                tempat = '$tempat',
                tgl_lahir = '$tgl_lahir',
                jekel = '$jekel',
                alamat_rumah = '$alamat_rumah',
                rt_rw = '$rt_rw',
                agama = '$agama',
                type = '$type'
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
        $selectSQL = "SELECT * FROM pelanggan WHERE id = $id";
        $result = mysqli_query($connection, $selectSQL);
        if (!$result || mysqli_num_rows($result) == 0) {
            echo '<meta http-equiv="refresh" content=0";url=?page=pelanggan">';
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
                    <label for="nik" class="form-label">Nik</label>
                    <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" value="<?php echo $row['nik'] ?>" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="nama" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="<?php echo $row['nama'] ?>" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="tempat" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan Tempat Lahir" value="<?php echo $row['tempat'] ?>" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $row['tgl_lahir'] ?>" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="jekel" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jekel" id="jekel">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>  
                </div>
                <div class="mb-3 mt-3">
                    <label for="alamat" class="form-label">Alamat Rumah</label>
                    <input type="text" class="form-control" id="alamat_rumah" name="alamat_rumah" placeholder="Alamat" value="<?php echo $row['alamat_rumah'] ?>" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="rt_rw" class="form-label">RT / RW</label>
                    <input type="text" class="form-control" id="rt_rw" name="rt_rw" placeholder="RT/RW" value="<?php echo $row['rt_rw'] ?>" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="agama" class="form-label">Agama</label>
                    <select class="form-select" aria-label="Default select example" name="agama" value="<?php echo $row['agama'] ?>">
                        <option value="">-- Pilih Agama--</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>  
                </div>
                <div class="mb-3 mt-3">
                    <label for="type" class="form-label">Type Rumah (Ukuran Rumah)</label>
                    <select class="form-select" aria-label="Default select example" name="type" value="<?php echo $row['type'] ?>">
                        <option value="">-- Pilih Type--</option>
                        <option value="tipe 36">tipe 36</option>
                        <option value="tipe 45">tipe 45</option>
                        <option value="tipe 54">tipe 54</option>
                        <option value="tipe 60">tipe 60</option>
                        <option value="tipe 70">tipe 70</option>
                        <option value="tipe 120+">tipe 120+</option>
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