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
</head>

<body>
  <!-- Begin page -->
  <div id="wrapper">
    <!-- Top Bar Start -->
    <div class="topbar">
      <!-- LOGO -->
      <div class="topbar-left"><a href="index.php" class="logo"><span><img src="assets/images/logo.png" alt="" height="24"> </span><i><img src="assets/images/logo-sm.png" alt="" height="22"></i></a></div>
      <nav class="navbar-custom">
        <ul class="navbar-right d-flex list-inline float-right mb-0">
          <li class="dropdown notification-list d-none d-sm-block">
            <form role="search" class="app-search">
              <div class="form-group mb-0"><input type="text" class="form-control" placeholder="Search.."> <button type="submit"><i class="fa fa-search"></i></button></div>
            </form>
          </li>


          <li class="dropdown notification-list">
            <div class="dropdown notification-list nav-pro-img"><a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="index.html#" role="button" aria-haspopup="false" aria-expanded="false">
              <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle"></a>
              <div class="dropdown-menu dropdown-menu-right profile-dropdown">

                  <a class="dropdown-item" href="pages-lock-screen.php"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="pages-login.php"><i class="mdi mdi-power text-danger"></i> Logout</a>
              </div>
            </div>
          </li>
        </ul>
        <ul class="list-inline menu-left mb-0">
          <li class="float-left"><button class="button-menu-mobile open-left waves-effect waves-light"><i class="mdi mdi-menu"></i></button></li>
          <li class="d-none d-sm-block">
            <div class="dropdown pt-3 d-inline-block"><a class="btn btn-header waves-effect waves-light dropdown-toggle" href="index.html#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create
                New</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="add-new-event.php">Event</a> <a class="dropdown-item" href="add-new-teacher.php">Add New Teacher</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="add-news.php">News</a>
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
            <li><a href="index.php" class="waves-effect"><i class="mdi mdi-home"></i> <span>Dashboard</span></a></li>



            <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-table-settings"></i><span> Tables <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span></span></a>
              <ul class="submenu">
                <li><a href="tables-responsive.php">Admins</a></li>
              </ul>
            </li>

            <li class="menu-title">Extras</li>
            <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span></span></a>
              <ul class="submenu">
                <li><a href="pages-login.php">Login</a></li>
                <li><a href="pages-register.php">Register</a></li>
                <li><a href="pages-recoverpw.php">Recover Password</a></li>
                <li><a href="pages-lock-screen.php">Lock Screen</a></li>
                <li><a href="pages-404.php">Error 404</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- Sidebar -->
        <div class="clearfix"></div>
      </div><!-- Sidebar -left -->
    </div><!-- Left Sidebar End -->
    <!-- ============================================================== -->
  -- ============================================================== -->



  <!-- ============================================================== -->
  <div class="content-page">
    <!-- Start content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="page-title-box">
              <h4 class="page-title">Responsive Table</h4>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Agroxa</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                <li class="breadcrumb-item active">Responsive Table</li>
              </ol>
              <div class="state-information d-none d-sm-block">
                <div class="state-graph">
                  <div id="header-chart-1"></div>
                  <div class="info">Balance $ 2,317</div>
                </div>
                <div class="state-graph">
                  <div id="header-chart-2"></div>
                  <div class="info">Item Sold 1230</div>
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
                  <h4 class="mt-0 header-title">Example</h4>
                  <p class="text-muted m-b-30">This is an experimental awesome solution for responsive tables with complex data.</p>
                  <div class="table-rep-plugin">
                    <div class="table-responsive b-0" data-pattern="priority-columns">
                      <table id="tech-companies-1" class="table table-striped">
                        <thead>
                          <tr>
                            <th>Company</th>
                            <th data-priority="1">Last Trade</th>
                            <th data-priority="3">Trade Time</th>
                            <th data-priority="1">Change</th>
                            <th data-priority="3">Prev Close</th>
                            <th data-priority="3">Open</th>
                            <th data-priority="6">Bid</th>
                            <th data-priority="6">Ask</th>
                            <th data-priority="6">1y Target Est</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                            <td>597.74</td>
                            <td>12:12PM</td>
                            <td>14.81 (2.54%)</td>
                            <td>582.93</td>
                            <td>597.95</td>
                            <td>597.73 x 100</td>
                            <td>597.91 x 300</td>
                            <td>731.10</td>
                          </tr>
                          <tr>
                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                            <td>378.94</td>
                            <td>12:22PM</td>
                            <td>5.74 (1.54%)</td>
                            <td>373.20</td>
                            <td>381.02</td>
                            <td>378.92 x 300</td>
                            <td>378.99 x 100</td>
                            <td>505.94</td>
                          </tr>
                          <tr>
                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                            <td>191.55</td>
                            <td>12:23PM</td>
                            <td>3.16 (1.68%)</td>
                            <td>188.39</td>
                            <td>194.99</td>
                            <td>191.52 x 300</td>
                            <td>191.58 x 100</td>
                            <td>240.32</td>
                          </tr>
                          <tr>
                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                            <td>31.15</td>
                            <td>12:44PM</td>
                            <td>1.41 (4.72%)</td>
                            <td>29.74</td>
                            <td>30.67</td>
                            <td>31.14 x 6500</td>
                            <td>31.15 x 3200</td>
                            <td>36.11</td>
                          </tr>
                          <tr>
                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                            <td>25.50</td>
                            <td>12:27PM</td>
                            <td>0.66 (2.67%)</td>
                            <td>24.84</td>
                            <td>25.37</td>
                            <td>25.50 x 71100</td>
                            <td>25.51 x 17800</td>
                            <td>31.50</td>
                          </tr>
                          <tr>
                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                            <td>18.65</td>
                            <td>12:45PM</td>
                            <td>0.97 (5.49%)</td>
                            <td>17.68</td>
                            <td>18.23</td>
                            <td>18.65 x 10300</td>
                            <td>18.66 x 24000</td>
                            <td>21.12</td>
                          </tr>
                          <tr>
                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                            <td>15.81</td>
                            <td>12:25PM</td>
                            <td>0.11 (0.67%)</td>
                            <td>15.70</td>
                            <td>15.94</td>
                            <td>15.79 x 6100</td>
                            <td>15.80 x 17000</td>
                            <td>18.16</td>
                          </tr><!-- Repeat -->
                          <tr>
                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                            <td>597.74</td>
                            <td>12:12PM</td>
                            <td>14.81 (2.54%)</td>
                            <td>582.93</td>
                            <td>597.95</td>
                            <td>597.73 x 100</td>
                            <td>597.91 x 300</td>
                            <td>731.10</td>
                          </tr>
                          <tr>
                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                            <td>378.94</td>
                            <td>12:22PM</td>
                            <td>5.74 (1.54%)</td>
                            <td>373.20</td>
                            <td>381.02</td>
                            <td>378.92 x 300</td>
                            <td>378.99 x 100</td>
                            <td>505.94</td>
                          </tr>
                          <tr>
                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                            <td>191.55</td>
                            <td>12:23PM</td>
                            <td>3.16 (1.68%)</td>
                            <td>188.39</td>
                            <td>194.99</td>
                            <td>191.52 x 300</td>
                            <td>191.58 x 100</td>
                            <td>240.32</td>
                          </tr>
                          <tr>
                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                            <td>31.15</td>
                            <td>12:44PM</td>
                            <td>1.41 (4.72%)</td>
                            <td>29.74</td>
                            <td>30.67</td>
                            <td>31.14 x 6500</td>
                            <td>31.15 x 3200</td>
                            <td>36.11</td>
                          </tr>
                          <tr>
                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                            <td>25.50</td>
                            <td>12:27PM</td>
                            <td>0.66 (2.67%)</td>
                            <td>24.84</td>
                            <td>25.37</td>
                            <td>25.50 x 71100</td>
                            <td>25.51 x 17800</td>
                            <td>31.50</td>
                          </tr>
                          <tr>
                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                            <td>18.65</td>
                            <td>12:45PM</td>
                            <td>0.97 (5.49%)</td>
                            <td>17.68</td>
                            <td>18.23</td>
                            <td>18.65 x 10300</td>
                            <td>18.66 x 24000</td>
                            <td>21.12</td>
                          </tr>
                          <tr>
                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                            <td>15.81</td>
                            <td>12:25PM</td>
                            <td>0.11 (0.67%)</td>
                            <td>15.70</td>
                            <td>15.94</td>
                            <td>15.79 x 6100</td>
                            <td>15.80 x 17000</td>
                            <td>18.16</td>
                          </tr><!-- Repeat -->
                          <tr>
                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                            <td>597.74</td>
                            <td>12:12PM</td>
                            <td>14.81 (2.54%)</td>
                            <td>582.93</td>
                            <td>597.95</td>
                            <td>597.73 x 100</td>
                            <td>597.91 x 300</td>
                            <td>731.10</td>
                          </tr>
                          <tr>
                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                            <td>378.94</td>
                            <td>12:22PM</td>
                            <td>5.74 (1.54%)</td>
                            <td>373.20</td>
                            <td>381.02</td>
                            <td>378.92 x 300</td>
                            <td>378.99 x 100</td>
                            <td>505.94</td>
                          </tr>
                          <tr>
                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                            <td>191.55</td>
                            <td>12:23PM</td>
                            <td>3.16 (1.68%)</td>
                            <td>188.39</td>
                            <td>194.99</td>
                            <td>191.52 x 300</td>
                            <td>191.58 x 100</td>
                            <td>240.32</td>
                          </tr>
                          <tr>
                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                            <td>31.15</td>
                            <td>12:44PM</td>
                            <td>1.41 (4.72%)</td>
                            <td>29.74</td>
                            <td>30.67</td>
                            <td>31.14 x 6500</td>
                            <td>31.15 x 3200</td>
                            <td>36.11</td>
                          </tr>
                          <tr>
                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                            <td>25.50</td>
                            <td>12:27PM</td>
                            <td>0.66 (2.67%)</td>
                            <td>24.84</td>
                            <td>25.37</td>
                            <td>25.50 x 71100</td>
                            <td>25.51 x 17800</td>
                            <td>31.50</td>
                          </tr>
                          <tr>
                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                            <td>18.65</td>
                            <td>12:45PM</td>
                            <td>0.97 (5.49%)</td>
                            <td>17.68</td>
                            <td>18.23</td>
                            <td>18.65 x 10300</td>
                            <td>18.66 x 24000</td>
                            <td>21.12</td>
                          </tr>
                          <tr>
                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                            <td>15.81</td>
                            <td>12:25PM</td>
                            <td>0.11 (0.67%)</td>
                            <td>15.70</td>
                            <td>15.94</td>
                            <td>15.79 x 6100</td>
                            <td>15.80 x 17000</td>
                            <td>18.16</td>
                          </tr><!-- Repeat -->
                          <tr>
                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                            <td>597.74</td>
                            <td>12:12PM</td>
                            <td>14.81 (2.54%)</td>
                            <td>582.93</td>
                            <td>597.95</td>
                            <td>597.73 x 100</td>
                            <td>597.91 x 300</td>
                            <td>731.10</td>
                          </tr>
                          <tr>
                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                            <td>378.94</td>
                            <td>12:22PM</td>
                            <td>5.74 (1.54%)</td>
                            <td>373.20</td>
                            <td>381.02</td>
                            <td>378.92 x 300</td>
                            <td>378.99 x 100</td>
                            <td>505.94</td>
                          </tr>
                          <tr>
                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                            <td>191.55</td>
                            <td>12:23PM</td>
                            <td>3.16 (1.68%)</td>
                            <td>188.39</td>
                            <td>194.99</td>
                            <td>191.52 x 300</td>
                            <td>191.58 x 100</td>
                            <td>240.32</td>
                          </tr>
                          <tr>
                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                            <td>31.15</td>
                            <td>12:44PM</td>
                            <td>1.41 (4.72%)</td>
                            <td>29.74</td>
                            <td>30.67</td>
                            <td>31.14 x 6500</td>
                            <td>31.15 x 3200</td>
                            <td>36.11</td>
                          </tr>
                          <tr>
                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                            <td>25.50</td>
                            <td>12:27PM</td>
                            <td>0.66 (2.67%)</td>
                            <td>24.84</td>
                            <td>25.37</td>
                            <td>25.50 x 71100</td>
                            <td>25.51 x 17800</td>
                            <td>31.50</td>
                          </tr>
                          <tr>
                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                            <td>18.65</td>
                            <td>12:45PM</td>
                            <td>0.97 (5.49%)</td>
                            <td>17.68</td>
                            <td>18.23</td>
                            <td>18.65 x 10300</td>
                            <td>18.66 x 24000</td>
                            <td>21.12</td>
                          </tr>
                          <tr>
                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                            <td>15.81</td>
                            <td>12:25PM</td>
                            <td>0.11 (0.67%)</td>
                            <td>15.70</td>
                            <td>15.94</td>
                            <td>15.79 x 6100</td>
                            <td>15.80 x 17000</td>
                            <td>18.16</td>
                          </tr><!-- Repeat -->
                          <tr>
                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                            <td>597.74</td>
                            <td>12:12PM</td>
                            <td>14.81 (2.54%)</td>
                            <td>582.93</td>
                            <td>597.95</td>
                            <td>597.73 x 100</td>
                            <td>597.91 x 300</td>
                            <td>731.10</td>
                          </tr>
                          <tr>
                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                            <td>378.94</td>
                            <td>12:22PM</td>
                            <td>5.74 (1.54%)</td>
                            <td>373.20</td>
                            <td>381.02</td>
                            <td>378.92 x 300</td>
                            <td>378.99 x 100</td>
                            <td>505.94</td>
                          </tr>
                          <tr>
                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                            <td>191.55</td>
                            <td>12:23PM</td>
                            <td>3.16 (1.68%)</td>
                            <td>188.39</td>
                            <td>194.99</td>
                            <td>191.52 x 300</td>
                            <td>191.58 x 100</td>
                            <td>240.32</td>
                          </tr>
                          <tr>
                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                            <td>31.15</td>
                            <td>12:44PM</td>
                            <td>1.41 (4.72%)</td>
                            <td>29.74</td>
                            <td>30.67</td>
                            <td>31.14 x 6500</td>
                            <td>31.15 x 3200</td>
                            <td>36.11</td>
                          </tr>
                          <tr>
                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                            <td>25.50</td>
                            <td>12:27PM</td>
                            <td>0.66 (2.67%)</td>
                            <td>24.84</td>
                            <td>25.37</td>
                            <td>25.50 x 71100</td>
                            <td>25.51 x 17800</td>
                            <td>31.50</td>
                          </tr>
                          <tr>
                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                            <td>18.65</td>
                            <td>12:45PM</td>
                            <td>0.97 (5.49%)</td>
                            <td>17.68</td>
                            <td>18.23</td>
                            <td>18.65 x 10300</td>
                            <td>18.66 x 24000</td>
                            <td>21.12</td>
                          </tr>
                          <tr>
                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                            <td>15.81</td>
                            <td>12:25PM</td>
                            <td>0.11 (0.67%)</td>
                            <td>15.70</td>
                            <td>15.94</td>
                            <td>15.79 x 6100</td>
                            <td>15.80 x 17000</td>
                            <td>18.16</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- end col -->
          </div><!-- end row -->
        </div><!-- end page content-->
      </div><!-- container-fluid -->
    </div><!-- content -->
    <footer class="footer">© 2018 Agroxa <span class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span></footer>
  </div><!-- ============================================================== -->

    <!-- ============================================================== -->
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
