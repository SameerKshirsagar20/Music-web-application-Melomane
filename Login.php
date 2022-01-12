<?php
session_start();
include("connection.php");
error_reporting(0);

if(isset($_POST['submit']))
{

  $uname = $_POST['uname'];
  $pass =$_POST['password'];

  $query = "SELECT * FROM USERVALTEST WHERE USERNAME= '$uname' && PASSWORD ='$pass' ";
  $data = mysqli_query($conn, $query);
  $total = mysqli_num_rows($data);
  //echo $total;

  if($total == 1)
  {
    $_SESSION['username'] = $uname;
    header('location:Mainpage.php');
  }
  else
  {
      ?>
        <script>
            alert("Please enter correct credentials!");
        </script>
      <?php
  }

}


?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="./css/Login.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="./img/logo.png" type="img/png">
     <script src="./js/Login.js"></script>


     <title>Log in-Melomane</title>

   </head>
<body>
    
  <div class="container">
    <div class="logo"><img src="./img/textlogo1.png"></div>

    <div class="title">Log in</div>
    <div class="content">
      <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
        <div class="user-details">
          
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" id="user" name="uname">
          </div>
          
          
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" id="pass" name="password">
          </div>
          
       
        <div class="button">
          <input type="submit" value="Log in" onclick="logval" name= "submit">
        </div>

        <div class="preacc">
            <h4>Don't have an account?   <a href="./Signup.php">Sign Up</a></h4>
        </div>

      </form>
    </div>
  </div>



</body>
</html>
