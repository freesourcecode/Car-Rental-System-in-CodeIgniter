<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Rental Mobil &gt; Login</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'assets/css/sb-admin-2.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/vendor/fontawesome-free/css/all.min.css'; ?>" rel="stylesheet" type="text/css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url().'assets/css/signin1.css'; ?>" rel="stylesheet">
  </head>
  <body class="text-center" style="background-color: skyblue">
  <form class="form-signin" method="post" action="<?php echo base_url().'welcome/login'; ?>">
  <div class="rotate-n-15">
    <i class="fas fa-car fa-4x"></i>
  </div>
  <h1 class="h3 mb-3 font-weight-normal">Car Rental System</h1>
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo '<div class="alert alert-danger text-left" role="alert"><strong>Login gagal!</strong><br>Username dan password tidak sesuai.</div>';
            } else if($_GET['pesan'] == "logout"){
                echo '<div class="alert alert-success text-left" role="alert">Logout berhasil!</div>';
            } else if($_GET['pesan'] == "belumlogin"){
                echo '<div class="alert alert-warning text-left" role="alert">Silahkan Login dulu!</div>';
            }
        }
        ?>
  <label for="inputUname" class="sr-only">Username</label>
  <input type="text" name="username" id="inputUname" class="form-control" placeholder="Username" required autofocus>
      <?php echo form_error('username'); ?>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <?php echo form_error('password'); ?>
  <button class="btn btn-lg btn-primary btn-block" value="Login" type="submit">Login</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
</form>
</body>
</html>