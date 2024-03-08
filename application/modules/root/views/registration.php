
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets')?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets')?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets')?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition">
<div class="row">
  <div  class="col-sm-2"></div>
  <div class="col-sm-8">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="<?= base_url('assets')?>/index2.html" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="<?= base_url('root/registration_process/')?>" method="post">
          <div class="row">
            <div class="col-sm-4">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Firstname" name="fname">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Lastname" name="lname">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Middle Name" name="mi">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Address" name="address">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Zip Code" name="zipcode">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Phone" name="phone">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-phone"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email Address" name="email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Retype password" name="re_password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
          </div>
        </form>
        <a href="<?= base_url()?>" class="text-center">I already have a membership</a>
      </br>
      </div>
    </div>
  </div>
</div>
<script src="<?= base_url('assets')?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets')?>/dist/js/adminlte.min.js"></script>
</body>
</html>
