<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html>
<title>User Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">
<div class="w3-content w3-margin-top" style="max-width:1400px;">
  <div class="w3-row-padding">
    <div class="w3-third">   
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="file:///C:/Users/welcome/Desktop/images.png" style="width:95%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
			<h2 style="colour: green";"margin-top:100px"><?php echo $_SESSION['fname'];?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Banglore, India</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION['usrname'];?></p>
          <hr>
          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Top Expenses</b></p>
          <p>Adobe Photoshop(Premium edition)</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p>Family Tour</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>Shopping</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
          </div>
          <p>Media</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <p>Learning</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">80%</div>
          </div>
          <br>
          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Monthly Expenses</b></p>
          <p>March</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>February</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>January</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>
    </div>
    <div class="w3-twothird">
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Your Profile</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Daily Expenses</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2018 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>View your expenses statistics.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Expense Categories</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
          <p>Type of your Expenses.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Payment</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2017 - Mar 2018</h6>
          <p>List where you used up. </p><br>
        </div>
      </div>
      <form action="" method="POST" >
      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Edit your profile</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>first Name : <input type="input" value="<?php echo $_SESSION['fname'];?>"  name="username"  required></b></h5>
          <p>Enter your new User name</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Current Password : <input type="input" value="<?php echo $_SESSION['pasword'];?>" name="password" placeholder="" required></b></h5>
          <p>Your password till now</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>New Password : <input type="password" name="npassword" placeholder="" required></b></h5>
          <p>Your password from now on</p><br>
          <input type="submit" value="submit" name="submit" />
        </div>
       <?php
        if(isset($_POST['submit'])){
           $mail=$_SESSION['usrname'];
          $name=$_POST['username'];
          $pass=$_POST['npassword'];
          $query="UPDATE `user_details` SET `first_name`=[$name],`password`=[$pass],`confirm_password`=[$pass] WHERE email_id='$mail'";
           $query_run = mysqli_query($con,$query);
           echo '<script type="text/javascript"> alert("details are updated") </script>';
            }
        
       ?>
     </div>
   </form>
      </div>
    </div>
  </div>
</div>
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by <a href="https://www.team6.com" target="_blank">team6.css</a></p>
</footer>
</body>
</html>