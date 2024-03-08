
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sample System</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets')?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets')?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets')?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition">
  <marquee direction="left"> <p style="font-size: 70px;color:violet;font-weight: bolder;">HAPPY BIRTHDAY AJ (Florentina) GWAPA!!</p></marquee>

  <form action="<?= base_url('admin/register_process/')?>" method="post"> 

    <label>Username</label>
    <input type="text" name="username" placeholder="Username" required><br/>

    <label>Password</label>
    <input type="password" name="password" placeholder="Password" required><br/>

    <label>Firstname</label>
    <input type="text" name="fname" placeholder="Firstname" required><br/>

    <label>Lastname</label>
    <input type="text" name="lname" placeholder="Lastname" required><br/>

    <label>Middle Name</label>
    <input type="text" name="mname" placeholder="Middle Name"><br/>

    <input type="submit" value="Register">
  </form>

<!-- jQuery -->
<script src="<?= base_url('assets')?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets')?>/dist/js/adminlte.min.js"></script>
</body>
</html>
