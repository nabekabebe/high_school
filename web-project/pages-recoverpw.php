<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
  <title>Agroxa - Responsive Bootstrap 4 Admin Dashboard</title>

  <link rel="shortcut icon" href="assets/images/favicon.ico">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
  <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
  <!-- Background -->
  <div class="account-pages"></div><!-- Begin page -->
  <div class="wrapper-page">
    <div class="card">
      <div class="card-body">
        <h3 class="text-center m-0"><a href="index.html" class="logo logo-admin"><img src="assets/images/logo.png" height="30" alt="logo"></a></h3>
        <div class="p-3">
          <h4 class="text-muted font-18 mb-3 text-center">Reset Password</h4>
          <div class="alert alert-info" role="alert">Enter your Email and instructions will be sent to you!</div>
          
          <form class="form-horizontal m-t-30" action="pages-recoverpw.php">
            <div class="form-group"><label for="useremail">Email</label> <input type="email" class="form-control" id="useremail" placeholder="Enter email"></div>
            <div class="form-group row m-t-20">
              <div class="col-12 text-right"><button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button></div>
            </div>
          </form>
          
        </div>
      </div>
    </div>
    <div class="m-t-40 text-center">
      <p class="text-muted">Remember It ? <a href="pages-login.php" class="text-white">login here</a></p>
      <p class="text-muted">© 2018 WMO. waldamisomaoromia <i class="mdi mdi-heart text-danger"></i> by Nabek</p>
    </div>
  </div><!-- END wrapper -->
  <!-- jQuery  -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/metisMenu.min.js"></script>
  <script src="assets/js/jquery.slimscroll.js"></script>
  <script src="assets/js/waves.min.js"></script>
  <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script><!-- App js -->
  <script src="assets/js/app.js"></script>
</body>

</html>
