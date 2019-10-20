<?php
session_start();
if(!isset($_SESSION['user'])){
    session_unset();
    session_destroy();
    header('location: http://localhost/web-project/pages-login.php?Error=you must login first');
    exit();
}
$connection=mysqli_connect('localhost','root','');
$select=mysqli_select_db($connection,'wmo');


$delete=@$_GET['id'];
if($delete){
    $delete_db="DELETE FROM Comment WHERE id='$delete' ";
$excute=mysqli_query($connection,$delete_db);
if($excute){
    echo ' <script> window.open("admin.php?deleted=success","_self")</script>';

}

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
    <link href="MaterialDesign-Webfont-master/css/materialdesignicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.8.94/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../plugins/morris/morris.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    <style type="text/css">
        #muna {
            height: 700px;
            background-color: gray;
        }

    </style>
    <script>
        function test() {
            window.location = "http://localhost/web-project/index.php";
        }

        function dash() {
            window.location = "http://localhost/web-project/admin.php";
        }

        function run() {
            window.location = "http://localhost/web-project/add-new-event.php";
        }

        function news() {
            window.location = "http://localhost/web-project/add-news.php";
        }

    </script>


</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left"><a href="#" class="logo"><span><img src="assets/images/logo/logo.png" alt="" height="60" width="60"> </span><i><img src="assets/images/logo/logo-sm.png" alt="" height="40"></i></a></div>
            <nav class="navbar-custom">
                <ul class="navbar-right d-flex list-inline float-right mb-0">
                    <li class="dropdown notification-list">
                        <div class="dropdown notification-list nav-pro-img"><a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="index.html#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img style="height:120px; width:120px; padding:10px;" src="assets/images/admin.jpg" alt="user" class="rounded-circle"></a>
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="index.html#" role="button" aria-haspopup="false" aria-expanded="false"></a>

                        </div>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left"><button class="button-menu-mobile open-left waves-effect waves-light"><i class="mdi mdi-menu"></i></button></li>
                    <li class="d-none d-sm-block">
                        <div class="dropdown pt-3 d-inline-block"><a class="btn btn-header waves-effect waves-light dropdown-toggle" href="index.html#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create
                                New</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <button onclick="run()" class="dropdown-item">Event</button>
                                <button onclick="news()" class="dropdown-item">News</button>
                            </div>
                        </div>
                    </li>
                </ul>

            </nav>
        </div><!-- Top Bar End -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                       <li class="menu-title">Main</li>
                        <li><a href="<?php echo 'http://localhost/web-project/index.php';?>" class="waves-effect"><i class="mdi mdi-home"></i><span>home page</span></a></li>
                        <li><a href="admin.php" class="waves-effect"><i class="fas fa-user"></i><span>Dashboard</span></a></li>
                        <li class="menu-title">settings</li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span>Edit Teacher Pages <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="teacher/teacher9.php?id9=allow">Edit grade 9 teacher</a></li>
                                <li><a href="teacher/teacher10.php?id9=allow">Edit grade 10 teacher</a></li>
                                <li><a href="teacher/teacher11.php?id9=allow">Edit grade 11 teacher</a></li>
                                <li><a href="teacher/teacher12.php?id9=allow">Edit grade 12 teacher</a></li>

                            </ul>
                        </li>

                        <li><a href="pages-register.php?id9=allow" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Register new admin <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span></span></a>
                        </li>
                        <li><a href="logout.php" class="waves-effect"><i class="fas fa-sign-out-alt"></i><span>Logout<span class="float-right menu-arrow"></span></span></a>
                        </li>

                    </ul>
                </div><!-- Sidebar -->
                <div class="clearfix"></div>
            </div><!-- Sidebar -left -->
        </div><!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <h4 class="page-title">ADMIN PANEL</h4><br>
                                <h5 class="font-italic" align="center">Posted comments review</h5>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">WMO - walda Misoma Oromia</a></li>
                                </ol>
                                <div class="state-information d-none d-sm-block">

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <div class="table-rep-plugin">
                                        <div class="table-responsive b-0" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th data-priority="3">NO</th>
                                                        <th data-priority="1">name</th>
                                                        <th data-priority="3">email</th>
                                                        <th data-priority="1">country</th>
                                                        <th data-priority="3">comment</th>
                                                        <th data-priority="3">phone</th>
                                                        <th data-priority="3">Date-Time</th>
                                                        <th data-priority="3">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                            $connection=mysqli_connect('localhost','root','');
$select=mysqli_select_db($connection,'wmo');

$view="SELECT * FROM Comment";
$show=mysqli_query($connection,$view);
while($db_data=mysqli_fetch_array($show)){
    $ID=$db_data['ID'];
    $username=$db_data['username'];
    $Email=$db_data['email'];
    $Country=$db_data['country'];
    $Comment=$db_data['comment'];
    $Telephone=$db_data['phone'];
    $time=$db_data['uploaded_on'];
    
?>
                                                    <tr>
                                                        <td><?php echo $ID; ?></td>
                                                        <td><?php echo $username; ?></td>
                                                        <td><?php echo $Email; ?></td>
                                                        <td><?php echo $Country; ?></td>
                                                        <td><?php echo $Comment; ?></td>
                                                        <td><?php echo $Telephone; ?></td>
                                                        <td><?php echo $time; ?></td>
                                                        <td> <a href="admin.php?id=<?php echo $ID; ?>">delete</a></td>
                                                    </tr>


                                                    <?php  } ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end page content-->
            </div>










            <!-- End Right content here -->
        </div> <!-- ============================================================== -->
    </div><!-- END wrapper -->
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>
    <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script><!-- Peity JS -->
    <script src="../plugins/peity/jquery.peity.min.js"></script>
    <script src="../plugins/morris/morris.min.js"></script>
    <script src="../plugins/raphael/raphael-min.js"></script>
    <script src="assets/pages/dashboard.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>
