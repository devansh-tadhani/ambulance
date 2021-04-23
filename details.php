<?php 
session_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Hosting | Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
<!-- ? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/loder.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area header-transparent" style="background-color:transperent;">
        <div class="main-header ">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">                                                                                          
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="map.html">map</a></li>
                                            <!-- <li><a href="packages.html">Packages</a></li>
                                            <li><a href="help.html">Help</a></zli>
                                            <li><a href="#">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li> -->
                                            <li><a href="contact.html">Contact</a></li>
                                            <!-- Button -->
                                            <?php 
                                            
                                                if(isset($_SESSION['userID']))
                                                {
                                                    echo '<li class="button-header margin-left "><a href="logout.php" class="btn">logout</a></li>';
                                                    
                                                }
                                                else
                                                {
                                                    echo '<li class="button-header margin-left "><a href="register.php" class="btn">Sign Up</a></li>';
                                                    echo '<li class="button-header"><a href="login.php" class="btn3">Sign In</a></li>';
                                                }

                                            ?>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div> 
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<?php 

require 'connection.php';
$sql = "SELECT * FROM login WHERE UserID=".$_SESSION['userID'];
$result = mysqli_query($conn,$sql);

if($result)
    {
        $rows = mysqli_fetch_assoc($result); 
              
    }
    else
    {
        echo 'error';
    }

?>

<main class="login-body" data-vide-bg="assets/img/login-bg.mp4">
<form class="form-default" action="details_php.php" method="POST">
        
        <div class="login-form" style="padding-top:50px;">
            <!-- logo-login -->
            <!-- <div class="logo-login" >
                <a href="index.php"><img src="assets/img/logo/loder.png" alt=""></a>
            </div> -->
            <h2>Details</h2>

            <div class="form-input">
                <label for="name">Full name</label>
                <input  type="text" name="Name" placeholder="Full name" value="<?php if(isset($rows['UserName'])) echo $rows['UserName']; ?>">
            </div>
            <div class="form-input">
                <label for="name">Email Address</label>
                <input type="email" name="email" placeholder="Email Address" value="<?php if(isset($rows['Email'])) echo $rows['Email']; ?>">
            </div>
            <div class="form-input">
                <label for="name">Password</label>
                <input type="password" name="password" placeholder="Password" value="<?php if(isset($rows['Password'])) echo $rows['Password']; ?>">
            </div>
            <div class="form-input">
                <label for="name">Confirm Password</label>
                <input type="password" name="password-repeat" placeholder="Confirm Password" value="<?php if(isset($rows['Password'])) echo $rows['Password']; ?>">
            </div>
            <div class="form-input">
                <input type="radio" name="radio" value="Patient" style="width: 20px;height:20px;" <?php if(isset($rows['DorP'])) if($rows['DorP'] == 'Patient') echo "checked"; ?>>
                <label for="name">Patient</label>
                <div></div>
                <input type="radio" name="radio" value="Driver" style="width: 20px;height:20px;" <?php if(isset($rows['DorP'])) if($rows['DorP'] == 'Driver') echo "checked"; ?>>
                <label for="name">Driver</label>
            </div>
            <div class="form-input">
                <label for="name">Address</label>
                <div ><textarea  name="address" rows=2 cols=40 style="background-color:transperent;" value="<?php if(isset($rows['Address'])) echo $rows['Address']; ?>"></textarea></div>
            </div>
            <div class="form-input" style="">
                <input type="submit" name="submit" value="Generate SOS" style="background-color:rgb(146,39,36);">
            </div>
            
            <!-- Forget Password -->
            <!-- <a href="login.php" class="registration">login</a> -->
        </div>
    </form>
    </main>

</body>

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>

<!-- Video bg -->
<script src="./assets/js/jquery.vide.js"></script>

<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="./assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>


</html>