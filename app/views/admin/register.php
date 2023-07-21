<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Login Admin</title>

  <!-- Custom fonts for this template-->
  <link href="<?= BASEURL; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Custom styles for this template-->
  <link href="<?= BASEURL; ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
  <?php Flasher::Login(); ?>
  <?php Flasher::Flash(); ?>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center my-5">

      <div class="col-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-12 p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Welcome To Perpus!</h1>
                </div>
                <form class="user" action="<?= BASEURL; ?>/admin/admin_register" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nama_user" id="nama_user" placeholder="Your Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Enter Email Address...">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                  </div>
                  <input type="submit" class="btn btn-primary btn-user btn-block" value="Register">
                </form>
                <hr>

                <div class="text-center">
                  <a class="small" href="<?= BASEURL; ?>/admin/login">Already Have A Account?</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= BASEURL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= BASEURL; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= BASEURL; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= BASEURL; ?>/js/sb-admin-2.min.js"></script>

</body>

</html>