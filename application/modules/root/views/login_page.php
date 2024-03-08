<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Walk N Style | Login</title>

  <link rel="shortcut icon" href="<?= base_url('assets/loginTemplate'); ?>/images/fav.jpg">
  <link rel="stylesheet" href="<?= base_url('assets/loginTemplate'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/loginTemplate'); ?>/css/fontawsom-all.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/loginTemplate'); ?>/css/style.css" />
</head>

<body>
  <div class="container-fluid ">
    <div class="container ">
      <div class="row cdvfdfd">
        <div class="col-lg-10 col-md-12 login-box">
          <div class="row">
            <div class="col-lg-6 col-md-6 log-det">
              <div class="small-logo">
                <i class="fab fa-asymmetrik"></i> Walk N Style 
              </div>
              <p class="dfmn">Lace up and log in to unlock a world where every step is a statement. Your journey in the realm of fabulous footwear begins here!</p>
              <form action="<?= base_url('root/login_process/') ?>" method="post">
                <div class="text-box-cont">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="email" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="email">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="password">
                  </div>

                  <div class="input-group center">
                    <button type="submit" class="btn btn-danger btn-round">LOGIN</button>
                  </div>
                  <div class="row">
                    <p class="forget-p">Don't have an account? <span>Sign Up Now</span></p>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-6 col-md-6 box-de">
              <div class="inn-cover">
                <div class="ditk-inf">
                  <div class="small-logo">
                    <i class="fab fa-asymmetrik"></i> Style Login
                  </div>
                  <h2 class="w-100">Din't Have an Account </h2>
                  <a href="#">
                    <button type="button" class="btn btn-outline-light">SIGN UP</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<script src="<?= base_url('assets/loginTemplate'); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('assets/loginTemplate'); ?>/js/popper.min.js"></script>
<script src="<?= base_url('assets/loginTemplate'); ?>/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/loginTemplate'); ?>/js/script.js"></script>


</html>