<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html>
    <head>
    <title>ADMINISTRATOR REGISTRATION</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="usersignup.php" method="POST">
            <ceter>
        <table>
            <tr>
                <td>First name</td><td><input type="text" name="fname" value="" /></td>
            </tr>
            <tr><td>Last Name</td><td><input type="text" name="lname" value="" /></td></tr>
            <tr>
                <td>Mobile number</td><td><input type="text" name="mobile" value="" /></td>
            </tr>        
            <tr>
                <td>Email id</td><td><input type="text" name="emailid" value="" /></td>
            </tr>
            <tr>
                <td>create password</td><td><input type="password" name="password" value="" /></td>
            </tr>
            <tr>
                <td>
                    confirm password
                </td><td><input type="password" name="confirmpassword" value="" /></td>
            </tr>
            <tr><td><a href="usersignup.php"><button type="submit" class="btn btn-success" name="submitsignup">Register</button></a></td></tr>
        </table>
   
<?php

if (isset($_POST['submitsignup'])){
   $first=$_POST['fname'];
   $last=$_POST['lname'];
   $phone=$_POST['mobile'];
   $email=$_POST['emailid'];
   $password=$_POST['password'];
   $cpassword=$_POST['confirmpassword'];
   $query= "INSERT INTO `user_details`(`first_name`, `last_name`, `mobile`,`email_id`,`password`,`confirm_password`) VALUES('$first','$last','$phone','$email','$password','$cpassword')";
   header('location:login.php');
   $query_run = mysqli_query($con,$query);
   
}

?>
         </form>
    </body>
</html>


