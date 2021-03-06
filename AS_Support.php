<?php
session_start();
error_reporting(0);

if(!isset($_SESSION['username']))
{
    header('location:Login.php');
}

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Support.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="icon" href="./img/logo.png" type="img/png">
    <title>Support-Melomane</title>
</head>
<body>

     <!-----------------------------NAVBAR------------------------->
    <div class="navbar">
        <a href="./Mainpage.php" class="logo1">
            <img src="./img/textlogo1.png">
        </a>
        <ul class="navi">
            <li><a href="./AS_Premium.php">Premium</a></li>
            <li><a href="./AS_Support.php">Help</a></li>
            <li><a href="./AS_Download.php">Download</a></li>
            <li><a>|</a></li>
            <li><a href="#"><?php echo "HI, ".$_SESSION['username'];?></a></li>
            <li><a href="./Logout.php">Log Out</a></li>
        </ul>
    </div>
    <!-----------------------------HERO------------------------->
    <div class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">How can we help you?</h1>
                <div class="search">
                    <i class="fas fa-search"><input type="text" placeholder="Search"></i>
                </div>
                <ul class="help_titles">
                    <li>PAYMENT HELP</li>
                    <li>ACCOUNT HELP</li>
                    <li>ACCOUNT HELP</li>
                    <li>ACCOUNT HELP</li>
                </ul>
                <div class="help_subtitles">
                    <h2><a href="">Price updates</a></h2>
                    <h2><a href="">Can't reset password</a></h2>
                    <h2><a href="">Country or region settings</a></h2>
                    <h2><a href="">Verify email address</a></h2>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------->
    <div class="hero1">
        <div class="hero-container1">
            <div class="hero-content1">
                    <ul class="head_tags">
                        <li>Account & Payment</li>
                        <li>Using Melomane</li>
                        <li>Listen Everywhere</li>
                    </ul>
                    <div class="tags">
                        <ul  class="AP_tags">
                            <li><a href="">Account Help</a></li>
                            <li><a href="">Payment Help</a></li>
                            <li><a href="">Subscription Options</a></li>
                            <li><a href="">Premium Family</a></li>
                            <li><a href="">Premium Duo</a></li>
                            <li><a href="">Premium Student</a></li>
                            <li><a href="">Privacy & Security</a></li>
                        </ul>
                        <ul  class="UM_tags">
                            <li><a href="">Getting Started</a></li>
                            <li><a href="">Playlists</a></li>
                            <li><a href="">Features</a></li>
                            <li><a href="">System & Settings</a></li>
                            <li><a href="">Troubleshooting</a> </li>
                            <li><a href="">Ongoing issues</a> </li>
                        </ul>
                        <ul  class="LE_tags">
                            <li><a href="">Speakers</a></li>
                            <li><a href="">TVs </a></li>
                            <li><a href="">Cars</a></li>
                            <li><a href="">Car Thing</a></li>
                            <li><a href="">Gaming</a></li>
                            <li><a href="">Smart Watches</a></li>
                            <li><a href="">Smart Displays</a></li>
                            <li><a href="">Voice Assistants</a></li>
                        </ul>
                    </div>
             </div>
        </div>
    </div>
   <!--===============================-->

    <div class="visit">
        <h1 class="visit_head">Visit the Community</h1>
        <h2 class="visit_subtext">Have questions? Find answers from our worldwide <br><br> community of expert fans!</h2>
        <button class="Visit_button">Find Answers</button>
    </div>

    <!--=====================================FOOTER============-->

    <div class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer_logo">
                    <a href="#">
                        <img src="./img/textlogo1.png" alt="">
                    </a>
                </div>
                <div class="footer_desc">
                    <h2>
                        Hello folks! Melomane is a widely spread music coomunity with over 10M+ subscribers.<br>
                        Join us in our journey and be a part of an exciting community!
                    </h2>
                </div>
                <div class="social-menu">
                    <ul>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
    
                    </ul>
                </div>
                <div class="footer_right">
                    <ul class="f_head">
                        <li><a href="">COMPANY</a></li>
                        <li><a href="">COMMUNITIES</a></li>
                        <li><a href="">USEFUL LINKS</a></li>
                    </ul>
                    <div class="footer_subtags">
                        <ul class="comp_tags">
                            <li><a href="">About </a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Jobs</a></li>
                        </ul>
                        <ul class="commu_tags">
                            <li><a href="">For Artist </a></li>
                            <li><a href="">Advertising</a></li>
                            <li><a href="">Developers</a></li>
                            <li><a href="">Investors</a></li>
                            <li><a href="">Vendors</a></li>
                        </ul>
                        <ul class="link_tags">
                            <li><a href="">Support </a></li>
                            <li><a href="">Web Player</a></li>
                            <li><a href="">Free Mobile App</a></li>
                        </ul>
    
                    </div>
                    <div class="copyright">
                        <p>&copy; Designed with &heartsuit; by Sameer Kshirsagar.</p>
                    </div>
    
                </div>
    
            </div>
        </div>
    </div>


</body>
</html>