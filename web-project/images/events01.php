<?php


$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "wmo"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());

}else{

    if(isset($_POST['upload'])){
 
		$name = $_FILES['file']['name'];
		$title=$_POST['title'];
		$image=$_POST['image'];
		$content=$_POST['content'];

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
       
        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       
        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");
       
        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
        
         // Insert record
         $query = "insert into event(name, title, image, content) values('".$name."','".$title."', '".$image."', '".$content."')";
         mysqli_query($con,$query);
         
         // Upload file
         move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
       
        }
        
       }

}



?>















<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="SITE KEYWORDS HERE" />
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Title -->
		<title>WMO &minus; Education & Courses HTML5 Template</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="images/favicon.png">
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<!-- Fancy Box CSS -->
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Slick Nav CSS -->
        <link rel="stylesheet" href="css/slicknav.min.css">
        <!-- Magnific Popup -->
		<link rel="stylesheet" href="css/magnific-popup.css">

		<!-- Learedu Stylesheet -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">

		<!-- Learedu Color -->
		 <!--<link rel="stylesheet" href="css/color/color1.css">-->
		<link rel="stylesheet" href="css/color/color1.css">
		<!--<link rel="stylesheet" href="css/color/color3.css">-->
		<!--<link rel="stylesheet" href="css/color/color4.css">-->
		<!--<link rel="stylesheet" href="css/color/color5.css">-->
		<!--<link rel="stylesheet" href="css/color/color6.css">-->
		<!--<link rel="stylesheet" href="css/color/color7.css">-->
		<!--<link rel="stylesheet" href="css/color/color8.css">-->
		<link rel="stylesheet" href="index.html#" id="colors">

   <style >
       .wrapper{
           background-color: #e0e0d1;
           margin-top: 0px;
           
       }
       
       .logo{
           height:140px;
           width:140px;
           padding-bottom: 100px;
           margin-top: 0px;
           display: inline;
       }
       .header{
         background-color: #e0e0d1;  
           
       }
    .loader {
        position: absolute;
        width:100%;
        margin-right:200px ;
        margin-left:600px;
        margin-top:200px;
        margin-bottom:200px;
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
       
   </style>
    </head>
    <body class="wrapper">

		<!-- Book Preloader -->
        <div class="book_preload">
          <div class="loader"></div>
        </div>
		<!--/ End Book Preloader -->

		<!-- Mp Color -->
		<div class="mp-color">
			<div class="icon inOut"><i class="fa fa-cog fa-spin"></i></div>
			<h4>Choose Color</h4>
			<span class="color1"></span>
			<span class="color2"></span>
			<span class="color3"></span>
			<span class="color4"></span>
			<span class="color5"></span>
			<span class="color6"></span>
			<span class="color7"></span>
			<span class="color8"></span>
		</div>
		<!-- End Mp Color -->

		<!-- Header -->
		<header class="header">
			
			
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-12">
							<div class="logo">
								<a href="index.html"><img src="images/logo.png" alt="#"></a>
							</div>
							<div class="mobile-menu"></div>
						</div>
						<div class="col-lg-9 col-md-9 col-12">
							<!-- Header Widget -->
							<div class="header-widget">
								<div class="single-widget">
									<i class="fa fa-phone"></i>
									<h4>Call Now<span>022 1800 567 980</span></h4>
								</div>
								<div class="single-widget">
									<i class="fa fa-envelope-o"></i>
									<h4>Send Message<a href="mailto:mailus@mail.com"><span>wmo@education.com</span></a></h4>
								</div>
								<div class="single-widget">
									<i class="fa fa-map-marker"></i>
									<h4>Our Location<span>tekur abay, Adama, Us</span></h4>
								</div>
							</div>
							<!--/ End Header Widget -->
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
			<!-- Header Menu -->
			<div class="header-menu">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<nav class="navbar navbar-default">
								<div class="navbar-collapse">
									<!-- Main Menu -->
									<ul id="nav" class="nav menu navbar-nav">
										<li class="active"><a href="index.html">Home<i class="fa fa-angle-down"></i></a>
											
										</li>
										<li><a href="about.html#">about us<i class="fa fa-angle-down"></i></a>
											<ul class="dropdown">
											<li><a href="teachers.html">teachers</a></li>
								     
                                            </ul>
											<li><a href="blog-single-left-sidebar.html">academics</a></li>
								        <li><a href="#">Events<i class="fa fa-angle-down"></i></a>
											<ul class="dropdown">
												<li><a href="events1.html">Events 1</a></li>
												<li><a href="events2.html">Event 2</a></li>
											</ul>
										</li>
											
										<li><a href="contact.html">contact & support us</a></li>
									</ul>
									<!-- End Main Menu -->
									<!-- button -->
									<div class="button">
										<a href="adminlogin.html" class="btn"><i class="fa fa-pencil"></i>Admin login</a>
									</div>
									<!--/ End Button -->
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Menu -->
		</header>
		<!-- End Header -->
		
		<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>events</h2>
						<ul class="bread-list">
							<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="courses.html">Courses</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		
		<!-- Courses -->
		<section class="courses archives section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Popular <span>Courses</span> We Offer</h2>
							<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p>
						</div>
					</div>
				</div>
				<div class="row">
              <form action="event1.php" enctype='multipart/form-data' method="post">

						<div class="col-lg-4 col-md-6 col-12">
								<!-- Single Course -->
								<div class="single-course">
									<div class="course-head overlay">

<?php

$sql = "select name from images where id=1";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "images/".$image;

?>

	<img src='<?php echo $image_src;  ?>' >
										<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
									</div>
									<div class="single-content">


	<h4><a href="course-single.html"><span>Commerce</span>Business Management</a></h4>
 <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consecteturadipiscing elit aenean </p>
									</div>
									<div class="course-meta">
										<div class="meta-left">
											<span><i class="fa fa-users"></i>36 Seat</span>
											<span><i class="fa fa-clock-o"></i>2 Years</span>
										</div>
										<span class="price">$310</span>
									</div>
								</div>
								<!--/ End Single Course -->
							</div>

						</form>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Course -->
						<div class="single-course">
							<div class="course-head overlay">
								<img src="images/course/course1.jpg" alt="#">
								<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="course-single.html"><span>Commerce</span>Business Management</a></h4>
								<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consecteturadipiscing elit aenean </p>
							</div>
							<div class="course-meta">
								<div class="meta-left">
									<span><i class="fa fa-users"></i>36 Seat</span>
									<span><i class="fa fa-clock-o"></i>2 Years</span>
								</div>
								<span class="price">$310</span>
							</div>
						</div>
						<!--/ End Single Course -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Course -->
						<div class="single-course">
							<div class="course-head overlay">
								<img src="images/course/course2.jpg" alt="#">
								<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="course-single.html"><span>Science</span>Software Engineer</a></h4>
								<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean </p>
							</div>
							<div class="course-meta">
								<div class="meta-left">
									<span><i class="fa fa-users"></i>20 Seat</span>
									<span><i class="fa fa-clock-o"></i>1 Years</span>
								</div>
								<span class="price">$590</span>
							</div>
						</div>
						<!--/ End Single Course -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Course -->
						<div class="single-course">
							<div class="course-head overlay">
								<img src="images/course/course3.jpg" alt="#">
								<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="course-single.html"><span>Science</span>Electrical Management</a></h4>
								<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean </p>
							</div>
							<div class="course-meta">
								<div class="meta-left">
									<span><i class="fa fa-users"></i>49 Seat</span>
									<span><i class="fa fa-clock-o"></i>2 Years</span>
								</div>
								<span class="price">$140</span>
							</div>
						</div>
						<!--/ End Single Course -->
					</div>	
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Course -->
						<div class="single-course">
							<div class="course-head overlay">
								<img src="images/course/course1.jpg" alt="#">
								<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="course-single.html"><span>Commerce</span>Business Management</a></h4>
								<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consecteturadipiscing elit aenean </p>
							</div>
							<div class="course-meta">
								<div class="meta-left">
									<span><i class="fa fa-users"></i>36 Seat</span>
									<span><i class="fa fa-clock-o"></i>2 Years</span>
								</div>
								<span class="price">$350</span>
							</div>
						</div>
						<!--/ End Single Course -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Course -->
						<div class="single-course">
							<div class="course-head overlay">
								<img src="images/course/course2.jpg" alt="#">
								<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="course-single.html"><span>Science</span>Software Engineer</a></h4>
								<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean </p>
							</div>
							<div class="course-meta">
								<div class="meta-left">
									<span><i class="fa fa-users"></i>20 Seat</span>
									<span><i class="fa fa-clock-o"></i>1 Years</span>
								</div>
								<span class="price">$590</span>
							</div>
						</div>
						<!--/ End Single Course -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Course -->
						<div class="single-course">
							<div class="course-head overlay">
								<img src="images/course/course3.jpg" alt="#">
								<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
							</div>
							<div class="single-content">
								<h4><a href="course-single.html"><span>Science</span>Electrical Management</a></h4>
								<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean </p>
							</div>
							<div class="course-meta">
								<div class="meta-left">
									<span><i class="fa fa-users"></i>49 Seat</span>
									<span><i class="fa fa-clock-o"></i>2 Years</span>
								</div>
								<span class="price">$140</span>
							</div>
						</div>
						<!--/ End Single Course -->
					</div>	
				</div>
				<div class="row">
					<div class="col-12">
						<!-- Start Pagination -->
						<div class="pagination-main">
							<ul class="pagination">
								<li class="active"><a href="events1.html">1</a></li>
								<li class="active"><a href="events2.html">2</a></li>
							</ul>
						</div>
						<!--/ End Pagination -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Courses -->	
		
		<!-- Footer -->
		<footer class="footer overlay section">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<!-- About -->
							<div class="single-widget about">
								<div class="logo"><a href="courses.html#"><img src="images/logo2.png" alt="#"></a></div>
								<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur</p>
								<ul class="list">
									<li><i class="fa fa-phone"></i>Phone: +123 456-7890 </li>
									<li><i class="fa fa-envelope"></i>Email: <a href="mailto:info@youremail.com">Info@youremail.com</a></li>
									<li><i class="fa fa-map-o"></i>Address: 211 Ronad, California, Us</li>
								</ul>
							</div>
							<!--/ End About -->
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<!-- Useful Links -->
							<div class="single-widget useful-links">
								<h2>Useful Links</h2>
								<ul>
									<li><a href="courses.html#"><i class="fa fa-angle-right"></i>Home</a></li>
									<li><a href="courses.html#"><i class="fa fa-angle-right"></i>About Us</a></li>
									<li><a href="courses.html#"><i class="fa fa-angle-right"></i>Courses</a></li>
									<li><a href="courses.html#"><i class="fa fa-angle-right"></i>Events</a></li>
									<li><a href="courses.html#"><i class="fa fa-angle-right"></i>Blogs</a></li>
									<li><a href="courses.html#"><i class="fa fa-angle-right"></i>Contact</a></li>
								</ul>
							</div>
							<!--/ End Useful Links -->
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- Latest News -->
							<div class="single-widget latest-news">
								<h2>Latest Posts</h2>
								<div class="news-inner">
									<div class="single-news">
										<img src="images/blog/blog1.jpg" alt="#">
										<h4><a href="blog-single.html">Our Teacher the best Link to Savc</a></h4>
										<p>Nunc purus orci, blandit condimentum rhoncus vels</p>
									</div>
									<div class="single-news">
										<img src="images/blog/blog2.jpg" alt="#">
										<h4><a href="blog-single.html">Student Have the best Link to Ronae</a></h4>
										<p>Nunc purus orci, blandit condimentum rhoncus vels</p>
									</div>
									<div class="single-news">
										<img src="images/blog/blog3.jpg" alt="#">
										<h4><a href="blog-single.html">Sekker the best Link to build</a></h4>
										<p>Nunc purus orci, blandit condimentum rhoncus vele</p>
									</div>
								</div>
							</div>
							<!--/ End Latest News -->
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Newsletter -->
							<div class="single-widget newsletter">
								<h2>Subscribe Newsletter</h2>
								<div class="mail">
									<p>Don't miss to  subscribe to our news feed, Get the latest updates from us!</p>
									<div class="form">
										<input type="email" placeholder="Enter your email">
										<button class="button" type="submit"><i class="fa fa-envelope"></i></button>
									</div>
								</div>
							</div>
							<!--/ End Newsletter -->
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="bottom-head">
								<div class="row">
									<div class="col-12">
										<!-- Social -->
										<ul class="social">
											<li><a href="courses.html#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="courses.html#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="courses.html#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="courses.html#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="courses.html#"><i class="fa fa-youtube"></i></a></li>
										</ul>
										<!-- End Social -->
										<!-- Copyright -->
										<div class="copyright">
											<p>© Copyright 2018 <a href="courses.html#">LearnEdu</a>. All Rights Reserved</p>
										</div>
										<!--/ End Copyright -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Bottom -->
		</footer>
		<!--/ End Footer -->
		
		<!-- Jquery JS-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js"></script>
		<!-- Popper JS-->
        <script src="js/popper.min.js"></script>
		<!-- Bootstrap JS-->
        <script src="js/bootstrap.min.js"></script>
		<!-- Colors JS-->
        <script src="js/colors.js"></script>
		<!-- Jquery Steller JS -->
		<script src="js/jquery.stellar.min.js"></script>
		<!-- Particle JS -->
		<script src="js/particles.min.js"></script>
		<!-- Fancy Box JS-->
		<script src="js/facnybox.min.js"></script>
		<!-- Magnific Popup JS-->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Masonry JS-->
		<script src="js/masonry.pkgd.min.js"></script>
		<!-- Circle Progress JS -->
		<script src="js/circle-progress.min.js"></script>
		<!-- Owl Carousel JS-->
        <script src="js/owl.carousel.min.js"></script>
		<!-- Waypoints JS-->
        <script src="js/waypoints.min.js"></script>
		<!-- Slick Nav JS-->
        <script src="js/slicknav.min.js"></script>
		<!-- Counter Up JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Easing JS-->
        <script src="js/easing.min.js"></script>
		<!-- Wow Min JS-->
		<script src="js/wow.min.js"></script>
		<!-- Scroll Up JS-->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Google Maps JS -->
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw"></script>
        <script src="js/gmaps.min.js"></script>
		<!-- Main JS-->
        <script src="js/main.js"></script>
    </body>
</html>