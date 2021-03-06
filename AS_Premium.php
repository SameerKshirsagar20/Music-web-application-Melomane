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
    <link rel="stylesheet" href="./css/Premium.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link rel="icon" href="./img/logo.png" type="img/png">
    <title>Melomane Premium</title>
</head>
<body>
    <main>
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
                    <div class="hero_card">
                        <h1 class="hero-title">Get Premium free for 1 month</h1>
                        <h2 class="hero-subtext">Only $9.99 after. Cancel anytime.</h2>
                        <button class="hero-button">Get Started</button>
                        <div class="terms">
                            <a href="#" class="hero-terms-link">Terms and conditions apply.</a >
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        
            <!-----------------------------WHY GO PREMIUM------------------------->
            <h1 class="why_premium">Why go Premium?</h1>
    
            <div class="specifications">
                <div class="card">
                    <div class="card-cover">
                        <img src="./img/Premium/download_00000.jpg" alt="">
                    </div>
                    <h5>Download music.</h5>
                    <h6>Listen anywhere.</h6>
                </div>
                <div class="card">
                    <div class="card-cover">
                        <img src="./img/Premium/NoAd_00000.jpg" alt="">
                    </div>
                    <h5>No ad interruptions.</h5>
                    <h6>Enjoy nonstop music.</h6>
                </div>
                <div class="card">
                    <div class="card-cover">
                        <img src="./img/Premium/anysong_00000.jpg" alt="">
                    </div>
                    <h5>Play any song.</h5>
                    <h6>Even on mobile.</h6>
                </div>
                <div class="card">
                    <div class="card-cover">
                        <img src="./img/Premium/skips_00000.jpg" alt="">
                    </div>
                    <h5>Unlimited skips.</h5>
                    <h6>Just hit next.</h6>
                </div>
            </div>
    
            <div class="plans">
                <h1 class="pick_premium">Pick your Premium</h1>
                <h2>Listen without limits on your phone, speaker, and other devices.</h2>
    
                <div class="plan_cards">
                    <div class="pcard">
                        <div class="free_month">1 month Free</div>
                        <h2>Individual</h2>
                        <h3>$9.99/month after offer period</h3>
                        <div id="line"></div>
                        <div class="list">
    
                            <h3><i class="fas fa-check"></i> Listen to music ad-free</h3>
                            <h3><i class="fas fa-check"></i> Play anywhere - even offline</h3>
                            <h3><i class="fas fa-check"></i> On-demand playback</h3>
                        </div>
                        <button class="plan_button1">Get Started</button>
    
                    </div>
                    <div class="pcard">
                        <div class="free_month">1 month Free</div>
                        <h2>Duo</h2>
                        <h3>$12.99/month after offer period</h3>
                        <div id="line"></div>
                        <div class="list">
                            <h3><i class="fas fa-check"></i> 2 Premium accounts for a couple under one roof</h3>
                            <h3><i class="fas fa-check"></i> Duo Mix: a playlist for two, regularly updated with music you
                                both enjoy</h3>
                            <h3><i class="fas fa-check"></i> Ad-free music listening, play offline, on-demand playback</h3>
                        </div>
                        <button class="plan_button2">Get Started</button>
    
                    </div>
                    <div class="pcard">
                        <div class="free_month">1 month Free</div>
                        <h2>Family</h2>
                        <h3>$14.99/month after offer period</h3>
                        <div id="line"></div>
                        <div class="list">
                            <h3><i class="fas fa-check"></i> 6 Premium accounts for family members living under one roof
                            </h3>
                            <h3><i class="fas fa-check"></i> Family Mix: a playlist for your family, regularly updated with music you all enjoy</h3>
                            <h3><i class="fas fa-check"></i> Block explicit music</h3>
                            <h3><i class="fas fa-check"></i> Ad-free music listening, play offline, on-demand playback</h3>
                            <h3><i class="fas fa-check"></i> Melomane Kids: a separate app made just for kids</h3>
                        </div>
                        <button class="plan_button3">Get Started</button>
    
                    </div>
                    <div class="pcard">
                        <div class="free_month">1 month Free</div>
                        <h2>Student</h2>
                        <h3>$4.99/month after offer period</h3>
                        <div id="line"></div>
                        <div class="list">
                            <h3><i class="fas fa-check"></i> Hulu (ad-supported) plan</h3>
                            <h3><i class="fas fa-check"></i> SHOWTIME</h3>
                            <h3><i class="fas fa-check"></i> Listen to music ad-free</h3>
                            <h3><i class="fas fa-check"></i> Play anywhere - even offline</h3>
                            <h3><i class="fas fa-check"></i> On-demand playback</h3>
                        </div>
                        <button class="plan_button4">Get Started</button>
    
                    </div>
                </div>
    
    
            </div>
    
    </main>
<!--==========================FOOTER===============================-->
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