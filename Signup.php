
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="./css/Signup.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sign Up-Melomane</title>
     <link rel="icon" href="./img/logo.png" type="img/png">
     
   </head>
<body>
    
<?php

include("connection.php");
error_reporting(1);

if(isset($_POST['submit'])){
  
    $fname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpass']);

   // $encpass = password_hash($pass, PASSWORD_BCRYPT);
   // $enccpass = password_hash($cpass, PASSWORD_BCRYPT);

    $usernamequery = "SELECT * FROM USERVALTEST WHERE USERNAME= '$uname'";
    $uquery = mysqli_query($conn, $usernamequery);
    $usercount = mysqli_num_rows($uquery);


    $emailquery = "SELECT * FROM USERVALTEST WHERE EMAIL= '$email'";
    $equery = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($equery);
    
  
    if($emailcount>0)
    {
      ?>
        <script>
            alert("Email already exist!");
        </script>
      <?php
    }
    elseif($usercount>0)
    {
      ?>
        <script>
            alert("Usernme already exist!");
        </script>
      <?php
    }
    else
    {
      if($pass === $cpass)
      {
        $insertquery = "INSERT INTO USERVALTEST (fullname, username, email, phone, gender, password, cpassword) VALUES ('$fname','$uname','$email','$phone','$gender','$pass','$cpass')";
        $iquery = mysqli_query($conn,$insertquery);

        if($iquery)
        {
          header('location:Login.php');
        }
        else
        {?>
           <script>
                  alert("Connection failed!");
          </script>
          <?php
        }
      }
      else
      {
        ?>
           <script>
                  alert("password does not match.");
          </script>
          <?php
      }
    }
  

  
}
?>






  <div class="container">
    <div class="logo"><img src="./img/textlogo1.png"></div>

    <div class="title">Sign Up</div>
    <div class="content">
      <form  name="f1" method="POST" action="">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" id="name" name="fullname" require>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" id="user" name="username" require>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" id="email" name="email" require>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" placeholder="Enter your number" id="phone" name="phone" require>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" id="pass" name="pass" require>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" id="pass1" name="cpass" require>
          </div>
        </div>
        <div class="gender-details" id="gender" require>
          <input type="radio" name="gender" id="dot-1" value="on" checked >
          <input type="radio" name="gender" id="dot-2" value="on" >
          
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
        
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Sign Up" onclick="funpass" id="submit" name="submit">
        </div>

        <div class="preacc">
            <h4>Already have an account?   <a href="./Login.php">Log in</a></h4>
        </div>
      </form>

      
    </div>
  </div>


  <script src="./js/Signup.js"></script>
  
</body>
</html>


