<?php
session_start();
$access=@$_GET['id9'];
if(!empty($access)){
   $_SESSION['user']="let"; 
}
if(!isset($_SESSION['user'])){
    session_unset();
    session_destroy();
    header('location: http://localhost/web-project/pages-login.php?Error=you must login first');
    exit();
}
 
$connection=mysqli_connect('localhost','root','');
$select=mysqli_select_db($connection,'wmo');

$nameError="";
$emailError="";
   $yes='';
$redirect="";
$reg="";
$matchError="";
if(isset($_POST['submit']))       //perform the following actions if only the submit button is pressed
{
    $name="";$email="";
   
    
    $name=mysqli_real_escape_string($connection,$_POST['name']);   // if not empty then store the name in $name variable and then check for validation of the entered name(should only contain letter capital and small and period )
    if(!preg_match("/^[A-Za-z.0-9]*$/",$name))
    $nameError="only letters,numbers and whitespaces are allowed for username";     //if name is not valid replace the variable $nameError with new info that says insert correct format for username
 
    
   
  
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    if(!empty($email)){
         if(!preg_match("/^[A-Za-z0-9][a-zA-Z0-9._-]{3,}@[a-zA-Z._-]{3,}[.]{1}[a-zA-Z._-]{2,}/",$email)) 
        $emailError="insert valid email plese"; 
        
    }
   
    
    $p_confirm=mysqli_real_escape_string($connection,$_POST['r-password']);
      $password=mysqli_real_escape_string($connection,$_POST['Password']);
    
    
        if(!empty($name && $email && $password && $p_confirm)){
            
          if($password==$p_confirm){
       $query = "insert into login(username,password,email) values('$name','$password','$email')";
      $excute=mysqli_query($connection,$query);
      if($excute){
          $yes="Admin saved successfully";
          $redirect="<a class='btn btn-primary w-md waves-effect waves-light' href='admin.php'>back</a>";
          mysqli_close($connection);
      }
        
    }else $matchError="password didn't match!";
    
    }else $matchError="All fields are required!";

}
$reg="<button type='submit' name='submit' class='btn primary'>register</button>";




     
     
  
    



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
    <style>
    
    .error{
        color:red;
    }
    </style>
</head>

<body>
    <!-- Background -->
    <div class="account-pages"></div><!-- Begin page -->
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center m-0"><a href="index.html" class="logo logo-admin"><img src="assets/images/logo/logo.png" height="80" alt="logo"></a></h3>
                <div class="p-3">
                    <h4 class="text-muted font-18 m-b-5 text-center">WMO Register</h4>
                    <p class="text-muted text-center">Register Walda Misoma Oromia Admin account.</p>
                    <p class="text-muted text-center"><span class="error"><?php echo $yes."<br>";  echo $nameError."<br>"; echo $emailError."<br>"; echo $matchError; ?></span></p>

                    <form class="form-horizontal m-t-30" action="pages-register.php" method="post">
                        <div class="form-group"><label for="username"><span style="color:red;"></span> Username</label> <input type="text" name="name" class="form-control" id="username" placeholder="Enter username"></div>
                        <div class="form-group"><label for="useremail"><span style="color:red;"></span> Email</label> <input type="text" name="email" class="form-control" id="username" placeholder="Enter your email"></div>
                        <div class="form-group"><label for="userpassword"><span style="color:red;">New: </span> Password</label> <input name="Password" type="password" class="form-control" id="userpassword" placeholder="Enter password"></div>
                         <div class="form-group"><label for="userpassword"><span style="color:red;">confirm: </span>  password</label> <input name="r-password" type="password" class="form-control" id="userpassword" placeholder="repeat password"></div>
                        <div class="form-group row m-t-20">
                            <div class="col-12 text-right">
                                <?php echo  $reg; ?>
                               
                                <?php echo  $redirect; ?>
                                </div>
                        </div>
                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20">
                                <p class="font-12 text-muted mb-0">By registering you agree to the Walda Misoma Oromia <a href="pages-register.php#" class="text-primary">Terms of Use</a></p>
                            </div>
                        </div>
                    </form>
                    
                    
                    
                
                    
                </div>
            </div>
        </div>
        <div class="m-t-40 text-center">
            <p class="text-muted">© 2018 WMO. waldamisomaoromia => by Nabek</p>
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
