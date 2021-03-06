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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/Download.css">
    <title>Download-Melomane</title>
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
                <img src="./img/Download/Devices.png" alt="">
                <h1 class="hero-title">Download Melomane</h1>
                <h2 class="hero-subtitle">Play millions of songs on your device.</h2>
                <button class="hero-button">Download</button>
            </div>
        </div>
    </div>
    <!--------------------REST Body--------->
    <div class="download_body">
        <h3 class="body_title">Bring your music to mobile and tablet, too.</h3>
        <h4 class="body_subtitle">Listening on your phone or tablet is free, easy, and fun.</h4>
        <ul class="platforms">
            <li><a href=""></a><i class="fab fa-apple"></i></li>
            <li><a href=""></a><i class="fab fa-google-play"></i></li>
            <li><a href=""></a><i class="fab fa-windows"></i></li>
            <li><a href=""></a><i class="fab fa-amazon"></i></li>
        </ul>
    </div>
    <!---======================FOOTER==========================-->
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
                <div class="footer_left">
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
                        <p>&copy;  Designed with &heartsuit; by Sameer Kshirsagar.</p>
                    </div>
    
                </div>
    
    
            </div>
        </div>
    </div>

</body>
</html>