<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Halaman Login</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
    <div class="card-header"><h3 class="text-center font-weight-light my-2">Halaman Login</h3></div>
    
        <div class="card-body">
        <?php
        if (isset($_SESSION['error'])) {
        ?>
            <div class="alert alert-danger" role="alert">
                <i class="fa fa-exclamation-circle"></i>
                <?= $_SESSION['error']; ?>
            </div>
        <?php
            session_destroy();
        }
        ?>
        <div class="card-body">
            <form action="cek_login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
        </div>
    </div>
        </div>
    </div>
</body>

</html>