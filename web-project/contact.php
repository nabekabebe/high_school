<?php 
$connection=mysqli_connect('localhost','root','');
$select=mysqli_select_db($connection,'wmo');

$nameError="";
$emailError="";
$countryError="";
$phoneError="";
$commentError="";
if(isset($_POST['submit']))       //perform the following actions if only the submit button is pressed
{
    $name="";$email="";$country="";$phone="";$Comment="";
    if(empty($_POST['username']))       //if the username field is empty say it is required 
    $nameError="name is required please";
    else{ 
    $name=mysqli_real_escape_string($connection,(storeName($_POST['username'])));   // if not empty then store the name in $name variable and then check for validation of the entered name(should only contain letter capital and small and period )
    if(!preg_match("/^[A-Za-z.]*$/",$name))
    $nameError="only letters and whitespaces are allowed!";     //if name is not valid replace the variable $nameError with new info that says insert correct format for username
 
    }
    if(empty($_POST['email']))
    $emailError="email is required please";
    else {
    $email=mysqli_real_escape_string($connection,(storeName($_POST['email'])));
    if(!preg_match("/^[A-Za-z0-9][a-zA-Z0-9._-]{3,}@[a-zA-Z._-]{3,}[.]{1}[a-zA-Z._-]{2,}/",$email))    //this says start the line with only letters and number but no special charactrs in it and their totla number should be >3 character then use '@' then agin only alphabet then '.' only once then only alphabet
    $emailError="insert valid email plese"; 
    }
    if(empty($_POST['select']))
    $countryError="please select country code";
    else 
	$country=mysqli_real_escape_string($connection,$_POST['select']); //there is also validation for website ..check the video
	   
    

    if(empty($_POST['telephone']))
    $phoneError="please fill in the telephone number";
    else{ 
	$phone=mysqli_real_escape_string($connection,(storeName($_POST['telephone'])));
	if(!preg_match("/^[0-9]{9}$/",$phone))
	$phoneError="insert valid phone-number please"; 
	}
    if(empty($_POST['Comment']))
    $commentError="please share your thoughts!";
    else {
    $Comment=mysqli_real_escape_string($connection,($_POST['Comment']));
    }
    if(!empty($name && $email && $country && $Comment && $phone)){
         $query="INSERT INTO Comment(username,email,country,comment,phone,uploaded_on)VALUES('$name','$email','$country','$Comment','$phone',NOW())";
$excute=mysqli_query($connection,$query);
    }
   
	
}
function storeName($data){
    return $data;
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
    <title>WMO &minus; ODA Special Boarding School</title>
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
    <link rel="stylesheet" href="index.php#" id="colors">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="phone/css/intlTelInput.css">


    <style>
        .wrapper{
           background-color:#e0e0d1;
		   margin-top:0px;
		  
		   opacity: 30%;

	   }
	   #head-logo{
		margin-top: 0%;
		 
	   }
	   #centering{
		   margin-left: 50%;
		   margin-right: 50%;
		   margin-top: 50%;
		   margin-bottom: 50%;
	   }
	   #kuna{
		   float:right;
		   padding: 60px;
		   margin-left: 50%;
	   }
       #suna{
		position: absolute;   
		float:right;
		   
	   }
       .logo{
		   position: relative;
           height:130px;
           width:130px;
           padding-top:0px;
		   margin-left: 0px;
           margin-bottom:5px;
         
       }
       .header{
         background-color:#188f8b;
		 margin-top: 0px;
		 

       }
	   #bottom{
		   padding-left:10px;
	   }
	   #length{
		   width: 500px;
		   display: flex;
	   }
	   #demo{
		width: 300px;
		height: 41px;
	   }
	   .error{
        color:red;
    }
	#space{
		padding-left:85px;
	}
	
    .loader {
        position: relative;
        width:100%;
        margin-right:50% ;
        margin-left:45%;
        margin-top:25%;
        margin-bottom:50%;
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
    <div id="centering" class="book_preload">
        <div class="loader"></div>
    </div>
    <!--/ End Book Preloader -->
    <!-- Header -->
    <header class="header">


        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div id="head-logo" class="row">

                    <div class="logo">
                        <a href="index.php"><img src="images/logo.png" alt="#"></a>
                    </div>


                    <div class="col-lg-9 col-md-9 col-12">
                        <!-- Header Widget -->
                        <div class="header-widget">
                            <div class="single-widget">
                                <i class="fa fa-phone"></i>
                                <h4>Call Now<span>022 1800 567 980</span></h4>
                            </div>
                            <div class="single-widget">
                                <i class="far fa-comment-alt"></i>
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
                                    <li class="active"><a href="index.php">Home</a>

                                    </li>
                                    <li><a href="about.php#">About Us<i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="teachers.php">Teachers</a></li>

                                        </ul>
                                    <li><a href="blog-single-left-sidebar.php">Academics</a></li>
                                    <li><a href="events1.php">Events</a>
                                    </li>

                                    <li><a href="contact.php">Contact & Support</a></li>
                                </ul>
                                <!-- End Main Menu -->
                                <!-- button -->
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
                    <h2>Contact Us</h2>
                    <ul class="bread-list">
                        <li><a href="index.php">Home<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->

    <!-- Contact Us -->
    <section id="contact" class="contact section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2><span>Share </span>Your Thoughts</h2>
                        <p>waldaa misooma oromia waldaa misooma oromia waldaa misooma oromia waldaa misooma oromiawaldaa misooma oromiawaldaa misooma oromiawaldaa misooma oromiawaldaa misooma oromia waldaa misooma oromia waldaa misooma oromia waldaa misooma oromiawaldaa misooma oromia waldaa misooma oromia waldaa misooma oromia waldaa misooma oromiawaldaa misooma oromiawaldaa misooma oromia waldaa misooma . </p>
                    </div>
                </div>
            </div>
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="contact-map">
                            <!-- Map -->
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63040.058859456185!2d38.708912997005875!3d9.063427735167732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6c67d2e35cbb4d62!2s6+Kilo!5e0!3m2!1sen!2set!4v1553092324795" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-head">
                            <!-- Form -->
                            <form class="form" action="contact.php" method="POST">
                                <div class="form-group">
                                    <input name="username" type="text" placeholder="Enter Name"><span class="error">
                                        <?php echo $nameError; ?></span><br><br>
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" placeholder="Email Address"><span class="error">
                                        <?php echo $emailError; ?></span><br><br>
                                </div>
                                <div class="form-group">
                                   <textarea style="height:200px;" name="Comment" type="text" placeholder="Comment"></textarea><span class="error"><?php echo $commentError; ?></span><br><br>
                                </div>
                                <div id="length" class="form-group">
                                    <div id="inlineFormCustomSelectPref">
                                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="select">

                                           <option value="">Country</option>
											<option data-countryCode="DZ" value="Algeria">Algeria (+213)</option>
		<option data-countryCode="AD" value="Andorra">Andorra (+376)</option>
		<option data-countryCode="AO" value="Angola">Angola (+244)</option>
		<option data-countryCode="AI" value="Anguilla">Anguilla (+1264)</option>
		<option data-countryCode="AG" value="Antigua Barbuda">Antigua &amp; Barbuda (+1268)</option>
		<option data-countryCode="AR" value="Argentina">Argentina (+54)</option>
		<option data-countryCode="AM" value="Armenia">Armenia (+374)</option>
		<option data-countryCode="AW" value="Aruba">Aruba (+297)</option>
		<option data-countryCode="AU" value="Australia">Australia (+61)</option>
		<option data-countryCode="AT" value="Austria">Austria (+43)</option>
		<option data-countryCode="AZ" value="Azerbaijan">Azerbaijan (+994)</option>
		<option data-countryCode="BS" value="Bahamas">Bahamas (+1242)</option>
		<option data-countryCode="BH" value="Bahrain">Bahrain (+973)</option>
		<option data-countryCode="BD" value="Bangladesh">Bangladesh (+880)</option>
		<option data-countryCode="BB" value="Barbados">Barbados (+1246)</option>
		<option data-countryCode="BY" value="Belarus">Belarus (+375)</option>
		<option data-countryCode="BE" value="Belgium">Belgium (+32)</option>
		<option data-countryCode="BZ" value="Belize">Belize (+501)</option>
		<option data-countryCode="BJ" value="Benin">Benin (+229)</option>
		<option data-countryCode="BM" value="Bermuda">Bermuda (+1441)</option>
		<option data-countryCode="BT" value="Bhutan">Bhutan (+975)</option>
		<option data-countryCode="BO" value="Bolivia">Bolivia (+591)</option>
		<option data-countryCode="BA" value="Bosnia Herzegovina">Bosnia Herzegovina (+387)</option>
		<option data-countryCode="BW" value="Botswana">Botswana (+267)</option>
		<option data-countryCode="BR" value="Brazil">Brazil (+55)</option>
		<option data-countryCode="BN" value="Brunei">Brunei (+673)</option>
		<option data-countryCode="BG" value="Bulgaria">Bulgaria (+359)</option>
		<option data-countryCode="BF" value="Burkina Faso ">Burkina Faso (+226)</option>
		<option data-countryCode="BI" value="Burundi">Burundi (+257)</option>
		<option data-countryCode="KH" value="Cambodia">Cambodia (+855)</option>
		<option data-countryCode="CM" value="Cameroon">Cameroon (+237)</option>
		<option data-countryCode="CA" value="Canada">Canada (+1)</option>
		<option data-countryCode="CV" value="Cape Verde Islands">Cape Verde Islands (+238)</option>
		<option data-countryCode="KY" value="Cayman Islands ">Cayman Islands (+1345)</option>
		<option data-countryCode="CF" value="Central African Republic ">Central African Republic (+236)</option>
		<option data-countryCode="CL" value="Chile">Chile (+56)</option>
		<option data-countryCode="CN" value="China">China (+86)</option>
		<option data-countryCode="CO" value="Colombia">Colombia (+57)</option>
		<option data-countryCode="KM" value="Comoros">Comoros (+269)</option>
		<option data-countryCode="CG" value="Congo">Congo (+242)</option>
		<option data-countryCode="CK" value="Cook Islands">Cook Islands (+682)</option>
		<option data-countryCode="CR" value="Costa Rica">Costa Rica (+506)</option>
		<option data-countryCode="HR" value="Croatia">Croatia (+385)</option>
		<option data-countryCode="CU" value="Cuba">Cuba (+53)</option>
		<option data-countryCode="CY" value="Cyprus North ">Cyprus North (+90392)</option>
		<option data-countryCode="CY" value="Cyprus South ">Cyprus South (+357)</option>
		<option data-countryCode="CZ" value="Czech Republic">Czech Republic (+42)</option>
		<option data-countryCode="DK" value="Denmark">Denmark (+45)</option>
		<option data-countryCode="DJ" value="Djibouti">Djibouti (+253)</option>
		<option data-countryCode="DM" value="Dominica">Dominica (+1809)</option>
		<option data-countryCode="DO" value="Dominican Republic">Dominican Republic (+1809)</option>
		<option data-countryCode="EC" value="Ecuador">Ecuador (+593)</option>
		<option data-countryCode="EG" value="Egypt">Egypt (+20)</option>
		<option data-countryCode="SV" value="El Salvador">El Salvador (+503)</option>
		<option data-countryCode="GQ" value="Equatorial Guinea ">Equatorial Guinea (+240)</option>
		<option data-countryCode="ER" value="Eritrea">Eritrea (+291)</option>
		<option data-countryCode="EE" value="Estonia">Estonia (+372)</option>
		<option data-countryCode="ET" value="Ethiopia">Ethiopia (+251)</option>
		<option data-countryCode="FK" value="Falkland Islands">Falkland Islands (+500)</option>
		<option data-countryCode="FO" value="Faroe Islands ">Faroe Islands (+298)</option>
		<option data-countryCode="FJ" value="Fiji">Fiji (+679)</option>
		<option data-countryCode="FI" value="Finland">Finland (+358)</option>
		<option data-countryCode="FR" value="France">France (+33)</option>
		<option data-countryCode="GF" value="French Guiana">French Guiana (+594)</option>
		<option data-countryCode="PF" value="French Polynesia">French Polynesia (+689)</option>
		<option data-countryCode="GA" value="Gabon ">Gabon (+241)</option>
		<option data-countryCode="GM" value="Gambia ">Gambia (+220)</option>
		<option data-countryCode="GE" value="Georgia">Georgia (+7880)</option>
		<option data-countryCode="DE" value="Germany">Germany (+49)</option>
		<option data-countryCode="GH" value="Ghana ">Ghana (+233)</option>
		<option data-countryCode="GI" value="Gibraltar">Gibraltar (+350)</option>
		<option data-countryCode="GR" value="Greece">Greece (+30)</option>
		<option data-countryCode="GL" value="Greenland">Greenland (+299)</option>
		<option data-countryCode="GD" value="Grenada">Grenada (+1473)</option>
		<option data-countryCode="GP" value="Guadeloupe">Guadeloupe (+590)</option>
		<option data-countryCode="GU" value="Guam">Guam (+671)</option>
		<option data-countryCode="GT" value="Guatemala">Guatemala (+502)</option>
		<option data-countryCode="GN" value="Guinea">Guinea (+224)</option>
		<option data-countryCode="GW" value="Guinea - Bissau">Guinea - Bissau (+245)</option>
		<option data-countryCode="GY" value="Guyana">Guyana (+592)</option>
		<option data-countryCode="HT" value="Haiti">Haiti (+509)</option>
		<option data-countryCode="HN" value="Honduras">Honduras (+504)</option>
		<option data-countryCode="HK" value="Hong Kong">Hong Kong (+852)</option>
		<option data-countryCode="HU" value="Hungary">Hungary (+36)</option>
		<option data-countryCode="IS" value="Iceland">Iceland (+354)</option>
		<option data-countryCode="IN" value="India">India (+91)</option>
		<option data-countryCode="ID" value="Indonesia">Indonesia (+62)</option>
		<option data-countryCode="IR" value="Iran">Iran (+98)</option>
		<option data-countryCode="IQ" value="Iraq">Iraq (+964)</option>
		<option data-countryCode="IE" value="Ireland">Ireland (+353)</option>
		<option data-countryCode="IL" value="Israel">Israel (+972)</option>
		<option data-countryCode="IT" value="Italy">Italy (+39)</option>
		<option data-countryCode="JM" value="Jamaica">Jamaica (+1876)</option>
		<option data-countryCode="JP" value="Japan">Japan (+81)</option>
		<option data-countryCode="JO" value="Jordan">Jordan (+962)</option>
		<option data-countryCode="KZ" value="Kazakhstan">Kazakhstan (+7)</option>
		<option data-countryCode="KE" value="Kenya">Kenya (+254)</option>
		<option data-countryCode="KI" value="Kiribati">Kiribati (+686)</option>
		<option data-countryCode="KP" value="Korea North ">Korea North (+850)</option>
		<option data-countryCode="KR" value="Korea South">Korea South (+82)</option>
		<option data-countryCode="KW" value="Kuwait">Kuwait (+965)</option>
		<option data-countryCode="KG" value="Kyrgyzstan">Kyrgyzstan (+996)</option>
		<option data-countryCode="LA" value="Laos">Laos (+856)</option>
		<option data-countryCode="LV" value="Latvia">Latvia (+371)</option>
		<option data-countryCode="LB" value="Lebanon">Lebanon (+961)</option>
		<option data-countryCode="LS" value="Lesotho">Lesotho (+266)</option>
		<option data-countryCode="LR" value="Liberia">Liberia (+231)</option>
		<option data-countryCode="LY" value="Libya">Libya (+218)</option>
		<option data-countryCode="LI" value="Liechtenstein">Liechtenstein (+417)</option>
		<option data-countryCode="LT" value="Lithuania">Lithuania (+370)</option>
		<option data-countryCode="LU" value="Luxembourg">Luxembourg (+352)</option>
		<option data-countryCode="MO" value="Macao">Macao (+853)</option>
		<option data-countryCode="MK" value="Macedonia">Macedonia (+389)</option>
		<option data-countryCode="MG" value="Madagascar">Madagascar (+261)</option>
		<option data-countryCode="MW" value="Malawi">Malawi (+265)</option>
		<option data-countryCode="MY" value="Malaysia">Malaysia (+60)</option>
		<option data-countryCode="MV" value="Maldives">Maldives (+960)</option>
		<option data-countryCode="ML" value="Mali">Mali (+223)</option>
		<option data-countryCode="MT" value="Malta">Malta (+356)</option>
		<option data-countryCode="MH" value="Marshall Islands">Marshall Islands (+692)</option>
		<option data-countryCode="MQ" value="Martinique">Martinique (+596)</option>
		<option data-countryCode="MR" value="Mauritania">Mauritania (+222)</option>
		<option data-countryCode="YT" value="Mayotte">Mayotte (+269)</option>
		<option data-countryCode="MX" value="Mexico">Mexico (+52)</option>
		<option data-countryCode="FM" value="Micronesia">Micronesia (+691)</option>
		<option data-countryCode="MD" value="Moldova">Moldova (+373)</option>
		<option data-countryCode="MC" value="Monaco">Monaco (+377)</option>
		<option data-countryCode="MN" value="Mongolia">Mongolia (+976)</option>
		<option data-countryCode="MS" value="Montserrat">Montserrat (+1664)</option>
		<option data-countryCode="MA" value="Morocco">Morocco (+212)</option>
		<option data-countryCode="MZ" value="Mozambique">Mozambique (+258)</option>
		<option data-countryCode="MN" value="Myanmar">Myanmar (+95)</option>
		<option data-countryCode="NA" value="Namibia">Namibia (+264)</option>
		<option data-countryCode="NR" value="Nauru">Nauru (+674)</option>
		<option data-countryCode="NP" value="Nepal">Nepal (+977)</option>
		<option data-countryCode="NL" value="Netherlands">Netherlands (+31)</option>
		<option data-countryCode="NC" value="New Caledonia">New Caledonia (+687)</option>
		<option data-countryCode="NZ" value="New Zealand">New Zealand (+64)</option>
		<option data-countryCode="NI" value="Nicaragua">Nicaragua (+505)</option>
		<option data-countryCode="NE" value="Niger">Niger (+227)</option>
		<option data-countryCode="NG" value="Nigeria">Nigeria (+234)</option>
		<option data-countryCode="NU" value="Niue">Niue (+683)</option>
		<option data-countryCode="NF" value="Norfolk Islands">Norfolk Islands (+672)</option>
		<option data-countryCode="NP" value="Northern Marianas">Northern Marianas (+670)</option>
		<option data-countryCode="NO" value="Norway">Norway (+47)</option>
		<option data-countryCode="OM" value="Oman">Oman (+968)</option>
		<option data-countryCode="PW" value="Palau">Palau (+680)</option>
		<option data-countryCode="PA" value="Panama">Panama (+507)</option>
		<option data-countryCode="PG" value="Papua New Guinea">Papua New Guinea (+675)</option>
		<option data-countryCode="PY" value="Paraguay">Paraguay (+595)</option>
		<option data-countryCode="PE" value="Peru">Peru (+51)</option>
		<option data-countryCode="PH" value="Philippines">Philippines (+63)</option>
		<option data-countryCode="PL" value="Poland">Poland (+48)</option>
		<option data-countryCode="PT" value="Portugal">Portugal (+351)</option>
		<option data-countryCode="PR" value="Puerto Rico ">Puerto Rico (+1787)</option>
		<option data-countryCode="QA" value="Qatar">Qatar (+974)</option>
		<option data-countryCode="RE" value="Reunion">Reunion (+262)</option>
		<option data-countryCode="RO" value="Romania">Romania (+40)</option>
		<option data-countryCode="RU" value="Russia">Russia (+7)</option>
		<option data-countryCode="RW" value="Rwanda">Rwanda (+250)</option>
		<option data-countryCode="SM" value="San Marino ">San Marino (+378)</option>
		<option data-countryCode="ST" value="Sao Tome Principe">Sao Tome &amp; Principe (+239)</option>
		<option data-countryCode="SA" value="Saudi Arabia">Saudi Arabia (+966)</option>
		<option data-countryCode="SN" value="Senegal">Senegal (+221)</option>
		<option data-countryCode="CS" value="Serbia">Serbia (+381)</option>
		<option data-countryCode="SC" value="Seychelles">Seychelles (+248)</option>
		<option data-countryCode="SL" value="Sierra Leone">Sierra Leone (+232)</option>
		<option data-countryCode="SG" value="Singapore">Singapore (+65)</option>
		<option data-countryCode="SK" value="Slovak Republic">Slovak Republic (+421)</option>
		<option data-countryCode="SI" value="Slovenia">Slovenia (+386)</option>
		<option data-countryCode="SB" value="Solomon Islands">Solomon Islands (+677)</option>
		<option data-countryCode="SO" value="Somalia">Somalia (+252)</option>
		<option data-countryCode="ZA" value="South Africa ">South Africa (+27)</option>
		<option data-countryCode="ES" value="Spain">Spain (+34)</option>
		<option data-countryCode="LK" value="Sri Lanka">Sri Lanka (+94)</option>
		<option data-countryCode="SH" value="St. Helena">St. Helena (+290)</option>
		<option data-countryCode="KN" value="St. Kitts">St. Kitts (+1869)</option>
		<option data-countryCode="SC" value="St. Lucia">St. Lucia (+1758)</option>
		<option data-countryCode="SD" value="Sudan">Sudan (+249)</option>
		<option data-countryCode="SR" value="Suriname">Suriname (+597)</option>
		<option data-countryCode="SZ" value="Swaziland">Swaziland (+268)</option>
		<option data-countryCode="SE" value="Sweden">Sweden (+46)</option>
		<option data-countryCode="CH" value="Switzerland">Switzerland (+41)</option>
		<option data-countryCode="SI" value="Syria">Syria (+963)</option>
		<option data-countryCode="TW" value="Taiwan">Taiwan (+886)</option>
		<option data-countryCode="TJ" value="Tajikstan">Tajikstan (+7)</option>
		<option data-countryCode="TH" value="Thailand">Thailand (+66)</option>
		<option data-countryCode="TG" value="Togo">Togo (+228)</option>
		<option data-countryCode="TO" value="Tonga">Tonga (+676)</option>
		<option data-countryCode="TT" value="Trinidad Tobago">Trinidad &amp; Tobago (+1868)</option>
		<option data-countryCode="TN" value="Tunisia">Tunisia (+216)</option>
		<option data-countryCode="TR" value="Turkey">Turkey (+90)</option>
		<option data-countryCode="TM" value="Turkmenistan">Turkmenistan (+7)</option>
		<option data-countryCode="TM" value="Turkmenistan">Turkmenistan (+993)</option>
		<option data-countryCode="TC" value="Turks Caicos Islands">Turks &amp; Caicos Islands (+1649)</option>
		<option data-countryCode="TV" value="Tuvalu">Tuvalu (+688)</option>
		<option data-countryCode="UG" value="Uganda">Uganda (+256)</option>
		<option data-countryCode="GB" value="UK">UK (+44)</option> 
		<option data-countryCode="UA" value="Ukraine">Ukraine (+380)</option>
		<option data-countryCode="AE" value="United Arab Emirates">United Arab Emirates (+971)</option>
		<option data-countryCode="UY" value="Uruguay">Uruguay (+598)</option>
		<option data-countryCode="US" value="USA">USA (+1)</option> 
		<option data-countryCode="UZ" value="Uzbekistan">Uzbekistan (+7)</option>
		<option data-countryCode="VU" value="Vanuatu">Vanuatu (+678)</option>
		<option data-countryCode="VA" value="Vatican City">Vatican City (+379)</option>
		<option data-countryCode="VE" value="Venezuela">Venezuela (+58)</option>
		<option data-countryCode="VN" value="Vietnam">Vietnam (+84)</option>
		<option data-countryCode="VG" value="Virgin Islands - British ">Virgin Islands - British (+1284)</option>
		<option data-countryCode="VI" value="Virgin Islands - US">Virgin Islands - US (+1340)</option>
		<option data-countryCode="WF" value="Wallis Futuna">Wallis &amp; Futuna (+681)</option>
		<option data-countryCode="YE" value="Yemen">Yemen (North)(+969)</option>
		<option data-countryCode="YE" value="Yemen">Yemen (South)(+967)</option>
		<option data-countryCode="ZM" value="Zambia">Zambia (+260)</option>
		<option data-countryCode="ZW" value="Zimbabwe">Zimbabwe (+263)</option>
                                        </select>
                                        <span id="top" class="error">
                                            <?php echo $countryError." ";  ?></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" id="demo" placeholder="insert your number here" name="telephone">
                                        <span id="bottom" class="error">
                                            <?php echo $phoneError; ?></span>
                                    </div>

                                </div>



                                <div class="form-group">
                                    <div class="button">
                                        <button type="submit" name="submit" class="btn primary">Post Comment</button>
                                    </div>


                            
                            <!--/ End Form -->
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="contact-bottom">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Contact-Info -->
                        <div class="contact-info">
                            <div class="icon"><i class="fa fa-map"></i></div>
                            <h3>Location</h3>
                            <p>wonji mazoria</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Contact-Info -->
                        <div class="contact-info">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h3>Email Address</h3>
                            <a href="mailto:information@gmail.com">nabek@yourwebsite.com</a>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Contact-Info -->
                        <div class="contact-info">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h3>telephone</h3>
                            <p>0945169110</p>
                            <p>0945169110</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact Us -->

    <!-- Footer -->
    <footer class="footer overlay section">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- About -->
                        <div class="single-widget about">
                            <div class="logo"><a href="index.php#"><img src="images/logo2.png" alt="#"></a></div>
                        </div>
                        <div id="suna">
                            <ul class="list">
                                <li><i class="fa fa-phone"></i>Phone: +251945169110 </li>
                                <li><i class="fa fa-envelope"></i>Email: <a href="mailto:info@youremail.com">nabek@youremail.com</a></li>
                                <li><i class="fas fa-map-marker-alt"></i>Address: wonji mazori, Adama, Ethiopia</li>
                            </ul>
                        </div>
                        <!--/ End About -->
                    </div>

                    <!-- Useful Links -->
                    <div id="kuna" class="single-widget useful-links">
                        <h2>Useful Links</h2>
                        <ul>
                            <li><a href="index.php#"><i class="fa fa-angle-right"></i>Home</a></li>
                            <li><a href="about.php#"><i class="fa fa-angle-right"></i>About Us</a></li>
                            <li><a href="blog-single-left-sidebar.php"><i class="fa fa-angle-right"></i>academics</a></li>
                            <li><a href="contact.php#"><i class="fa fa-angle-right"></i>Contact</a></li>
                        </ul>
                    </div>
                    <!--/ End Useful Links -->

                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Latest News -->


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
                                        <li><a href="https://www.facebook.com/ODASBS/"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="index.php#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.youtube.com/watch?v=DyJFcn7i1zI"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                    <!-- End Social -->
                                    <!-- Copyright -->
                                    <div class="copyright">
                                        <p>© Copyright 2018 <a href="index.php#">developer:nabekabebe</a>. All Rights Reserved</p>
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
    <script src="phone/js/intlTelInput.js"></script>
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
    <script src="js/map-script.js"></script>
    <!-- Main JS-->
    <script src="js/main.js"></script>
</body>

</html>
