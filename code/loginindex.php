<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        
        <title>Login and Registration Form Expense Tracker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form Expense Tracker Application " />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/remo.css" />
        <link rel="stylesheet" type="text/css" href="css/tyle.css" />
		<link rel="stylesheet" type="text/css" href="css/nimate-custom.css" />
    </head>
    <body>
        <div class="container">
            <div class="codrops-top">
                <a href="">
                
                </a>
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-Expense-Tracker-Application /">
                        
                    </a>
                </span>
                <div class="clr"></div>
            </div>
            <header>
                <h1>Login and Registration Form <span>Expense Tracker</span></h1>
				<nav class="codrops-remos">
					<span>Click <strong>"Join us"</strong> to see the form switch</span>
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                   
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="" method="POST" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="submitlogin" />
								</p>
                                 <?php 

  if (isset($_POST['submitlogin'])) {
      $usename=$_POST['username'];
      $pasword=$_POST['password'];
      $_SESSION['username']=$_POST['username'];
      $_SESSION['pasword']=$pasword;  
  
      $query="SELECT * FROM `user_details` WHERE email_id='$usename' AND password='$pasword' ";
      $query_run = mysqli_query($con,$query);
       while($row = mysqli_fetch_array($query_run)){
         $_SESSION['mobileno']=$row['mobile'];
         $_SESSION['fname']= $row['first_name'] ;
         $_SESSION['lname']= $row['last_name'] ;
         $_SESSION['pasword']= $row['password'] ;
         $_SESSION['email']= $row['email_id'];
        
      } 
     if (mysqli_num_rows($query_run)>0) {   
        $_SESSION['usrname']=$usename;
    
          header('location:after.php');
     }
     else
     {
         echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
     }
    
   }


 ?>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="" method="POST" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">First name</label>
                                    <input id="usernamesignup" name="fname" required="required" type="text" placeholder="firstname" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Last name</label>
                                    <input id="usernamesignup" name="lname" required="required" type="text" placeholder="lastname" />
                                </p>
                                
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon=" " > mobile number</label>
                                    <input  name="mobile" required="required"  placeholder="944"/> 
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon=" " > email id</label>
                                    <input id="emailsignup" name="emailid" required="required" type="email" placeholder="@example.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" name="password" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="confirmpassword" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                 <p class="login button"> 
                                    <a href="loginindex.php"><button type="submit"  name="submitsignup">Register</button></a></td></tr>  </p>
                                <?php

if (isset($_POST['submitsignup'])){
   $first=$_POST['fname'];
   $last=$_POST['lname'];
   $phone=$_POST['mobile'];
   $email=$_POST['emailid'];
   $password=$_POST['password'];
   $cpassword=$_POST['confirmpassword'];
   $query= "INSERT INTO `user_details`(`first_name`, `last_name`, `mobile`,`email_id`,`password`,`confirm_password`) VALUES('$first','$last','$phone','$email','$password','$cpassword')";
   header('location:signin.php');
   $query_run = mysqli_query($con,$query);
   
}

?>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                               
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>