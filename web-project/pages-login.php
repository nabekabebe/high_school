<?php
session_start();
$error=@$_GET['Error'];
if(!empty($error)){
    $loginError=$error;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>WMO - Walda Misoma Oromia</title>

  <link rel="shortcut icon" href="assets/images/favicon.ico">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
  <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="MaterialDesign-Webfont-master/css/materialdesignicons.min.css" rel="stylesheet">
</head>

<body>
  <!-- Background -->
  <div class="account-pages"></div><!-- Begin page -->
  <div class="wrapper-page">
    <div class="card">
      <div class="card-body">
          
        <h3 class="text-center m-0"><a href="index.php" class="logo logo-admin"><img src="assets/images/logo/logo.png" height="80" width="80" alt="logo"></a></h3>
        <div class="p-3">
          <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
          <p class="text-muted text-center">Sign in to continue to Walda Misoma Oromia.</p>
          <form class="form-horizontal m-t-30" action="pages-login.php" method="post">
            <div class="form-group"><label for="username">Username</label> <input type="text" name="username" class="form-control" id="username" placeholder="Enter username"></div>
            <div class="form-group"><label for="userpassword">Password</label> <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password"></div>
            <div class="form-group row m-t-20">
              <div class="col-6">
              </div>
              <div class="col-6 text-right"><button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button></div>
              
            </div>
            <div class="form-group m-t-10 mb-0 row">
                <div class="col-12 m-t-20"><a href="index.php"><i class="mdi mdi-home"></i>Home</a></div>
              <div class="col-12 m-t-20"><a href="pages-recoverpw.php" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a></div>
            </div>
          </form>

<?php

          $severname = 'localhost';
          $username='root';
          $password='';
          $db='wmo';
          $conn= mysqli_connect($severname, $username,$password, $db);

          if($conn && isset($_POST["username"])){
            $usrname = $_POST["username"];
            $passwd=$_POST["password"];

            if( $usrname!='' && $passwd!=''){

              
                $query="select * from login where username='".$usrname."' and password='".$passwd."'";
                $res = mysqli_query($conn, $query);
                if($res){
                    if(mysqli_num_rows($res)>0){
                        $_SESSION['user']=$_POST['username'];
                        echo '<script>window.location="admin.php";</script>';
                      
                    }else{
                        echo "<div align='center' class='alert alert-danger'>you have entered wrong <strong>username or password !!</strong> </div>";
                    }
                    }
                }
                else{
                  echo "<div align='center' class='alert alert-danger'>please fill in both <strong>Username </strong>and<strong> Password</strong> </div>";

                }
              }
          else{
              
            $error=@$_GET['Error'];
            if(!empty($error))
                   echo "<div align='center' class='alert alert-danger'><strong>$error</strong> !</div>";

          }
              

          ?>
        </div>
      </div>
    </div>
    <div class="m-t-40 text-center">
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
