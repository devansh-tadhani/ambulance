<!doctype html>
<html class="no-js" lang="zxx">
<?php 
include 'header.php';
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
<body>
<section class="team-area section-padding40 section-bg1">
<main class="login-body">
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
                <input type="submit" name="submit" value="Generate SOS">
                <!-- <li class="button-header margin-left "><a href="logout.php" class="btn">logout</a></li> -->
                <!-- <input  type="submit" name="submit" value="Generate SOS" style="background-color:rgb(146,39,36);"> -->
            </div>

            <!-- <div class="form-input" style="">
                <input type="submit" name="submit" value="Generate SOS" style="background-color:rgb(146,39,36);">
            </div> -->
            
            <!-- Forget Password -->
            <!-- <a href="login.php" class="registration">login</a> -->
        </div>
    </form>
</main>
</section>
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