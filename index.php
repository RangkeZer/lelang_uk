<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- Custom styles for this template-->
  <link href="assets/dist/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-8 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>  <h4 class="h3 text-gray-900 mb-6">Sistem Lelang Online</h4>
                  </div>
                  <?php 
                    if(isset($_GET['info'])){
                      if($_GET['info'] == "gagal"){ ?>
                        <div class="alert alert-warning alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h5><i class="icon fas fa-exclamation-triangle"></i> Mohon Maaf</h5>
                          Login gagal! username dan password salah!
                        </div>
                      <?php } else if($_GET['info'] == "logout"){ ?>
                        <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h5><i class="icon fas fa-check"></i> Terima Kasih</h5>
                          Anda telah berhasil logout
                        </div>
                      <?php }else if($_GET['info'] == "login"){ ?>
                        <div class="alert alert-info alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h5><i class="icon fas fa-info"></i> Mohon Maaf</h5>
                          Anda harus login terlebih dahulu
                        </div>
                      <?php } } ?>
                  <form class="user" method="post" action="cek_login_masyarakat.php">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user"  placeholder="Enter Username...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" placeholder="Enter Password... ">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-block">Login Masyarakat</button> 
                    <p class="mb-0 text-center">
                        <a href="daftar_masyarakat.php" class="text-center">Daftar Akun Masyarakat</a>
                    </p>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a href="login.php" class="btn btn-info btn-block btn-block">Masuk sebagai ADMIN/PETUGAS</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
