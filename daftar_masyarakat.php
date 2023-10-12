<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Daftar Masyarakat</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Custom styles for this template-->
  <link href="assets/dist/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

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
              
              <form action="proses_daftar.php" method="post">
          <div class="input-group mb-3">
            <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" name="telp" class="form-control" placeholder="Telephone">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>
          <div class="social-auth-links text-center">
            <button type="submit" class="btn btn-primary btn-block btn-block">Daftar</button>
          </div>
        </form>
              <div class="mb-0 text-center">
                    Sudah punya akun?
                    <a class="text-center" href="index.php">Login</a>
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
