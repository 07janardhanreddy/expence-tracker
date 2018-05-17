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
  </form>
                        </div>
            
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>