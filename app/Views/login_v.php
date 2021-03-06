<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Pil Pangkal</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') ?>">
  </head>
  <body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
      <div class="container">
        <div class="card login-card">
          <div class="row no-gutters">
            <div class="col-md-5">
              <img src="<?php echo base_url('assets/img/login1.jpg') ?>" alt="login" class="login-card-img">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <div class="brand-wrapper">
                  <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="logo" class="logo">
                </div>
                <p class="login-card-description">Berbagi informasi Pangan Lokal Kita!</p>
                <?php if(!empty($session)) { 
                            ?>
                            <div class="alert alert-<?php echo $session['status'] ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
                                <?php echo $session['message']; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                        <?php 
                        } 
                ?>
                <form method="POST" action="<?php echo site_url('Beranda/login')?>">
                    <div class="form-group">
                      <label for="username" class="sr-only">Username</label>
                      <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group mb-4">
                      <label for="password" class="sr-only">Password</label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="***********" required>
                    </div>
                    <button type="submit" name="login" id="login" class="btn btn-block login-btn mb-4" value="Login">Login</button>
                </form>
                  <br>
                  <p class="login-card-footer-text">Belum punya akun? <a href="<?php echo site_url('Register') ?>" class="text-reset"><font color="#854d0a">Register</font></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    
    <!--   core js files    -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>

    <!--  js library for devices recognition -->
    <script type="text/javascript" src="js/modernizr.js"></script>

    <!--  script for google maps   -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
    <script type="text/javascript" src="js/gaia.js"></script>

  </body>
</html>
