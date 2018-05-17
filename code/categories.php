<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Expense Tracker</title>
  <form action="" method="POST">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Expense Tracke" />
  <script type="application/x-javascript">
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- //Bootstrap Css -->
  <link href="css/font-awesome.css" rel="stylesheet"><!-- //Font-awesome Css -->
  <link href="css/cstyle.css" rel="stylesheet" type="text/css" media="all" /><!-- //Required Css -->
  <link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,800" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>
  <div class="slider">
  <div class="ccc-dott1">
    <div class="header">
      <div class="container">
        <div class="w3l_header_left">
          <ul>
            <li><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:ExpenseTracker@gmail.com">ExpenseTracker@gmail.com</a></li>
          </ul>
        </div>
        <div class="w3l_header_right">
          <div class="w3ls-social-icons">
            <a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
            <a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
            <a class="pinterest" href="#"><span class="fa fa-pinterest-p"></span></a>
            <a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
            <div class="logo">
              <h1><a  href="after.php"><span>E</span>xpenseTracker</a></h1>
            </div>
          </div>
          <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
            <nav class="cl-effect-1" id="cl-effect-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="after.php" data-hover="Home">Home</a></li>
                
                <li class="dropdown menu__item">
                  <a href="#" class="dropdown-toggle menu__link active" data-toggle="dropdown" data-hover="Categorys" role="button" aria-haspopup="true"
                      aria-expanded="false">Categorys<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="categories.php">Enter Categorys</a></li>
                    <li><a href="categoryretrive.php">View Categorys</a></li>
                  </ul>
                </li>
                
                <li><a href="contact.php" data-hover="Contact">Contact</a></li>
                                    <li><?php echo  $_SESSION['fname'];?></li>
                                   <li class="dropdown menu__item">
                  <a href="#" class="dropdown-toggle menu__link active" data-toggle="dropdown" data-hover="Categorys" role="button" aria-haspopup="true"
                      aria-expanded="false">Expense<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="enterexpense.php">Enter expense</a></li>
                    <li><a href="expenseretrive.php">view expences</a></li>
                  </ul>
                </li>
                <li><a href="profilqmanage.php" data-hover="Contact">Profile</a></li>
                <li><a href="home.php" data-hover="Contact">log out</a></li>
              </ul>
            </nav>
          </div>
        </nav>
      </div>
    </div>
      
      <table><tr><td>select ctegories</td><td>
 <select name="category" >
            <option>clothing</option>
            <option>groceries</option>
            <option>saloon</option>
            <option>automobile</option>
            <option>food</option>
            <option>bills</option>
            <option>electronics</option>
            <option>hotel</option>
            <option>loan</option>
                       </select>
  </td><td>select the limit</td><td>
      <select name="limit" >
            <option>10000</option>
            <option>5000</option>
            <option>1000</option></select></td>
           <td><input type="submit" value="submit" name="submit" /></td></tr>
        </table>
  
        
<?php
if(isset($_POST['submit'])){
      $mail=$_SESSION['usrname'];
$category=$_POST['category'];
$lim=$_POST['limit'];
$query="SELECT * FROM categories WHERE email_id='$mail' AND categories='$category'";
$query_run=mysqli_query($con,$query);
$count=mysqli_num_rows($query_run);
      if($count==0){
           $query="INSERT INTO `categories`(`email_id`,`categories`,`categorieslimit`) VALUES('$mail','$category','$lim')";
           $query_run = mysqli_query($con,$query);
      echo "do you want to select one more category";
      

?>    <form method="POST" action="">
      <input type="submit" value="yes" name="submityes" />
      <input type="submit" value="no" name="submitno" />
<?php
            if(isset($_POST['submityes'])){
              header('location:categories.php');
      }
            if(isset($_POST['submitno'])){
              $_SESSION['usrname']=$usename;
              header('location:after.php');
      }
}
        if($count>0){
            echo "do you want to change the limit";

?>
<form method="POST" action="">
<input type="submit" value="yes" name="limitsubmityes" />
      <input type="submit" value="no" name="limitsubmitno" />
            <?php
            if(isset($_POST['limitsubmityes'])){
              $mail=$_SESSION['usrname'];
$category=$_POST['category'];
$lim=$_POST['limit'];
      $query="UPDATE `categories` SET `categorieslimit`=['$lim'] WHERE email_id='$mail' AND categories='$category'" ;
        $query_run = mysqli_query($con,$query);
        echo '<script type="text/javascript"> alert("details are updated") </script>';
            }
           if(isset($_POST['limitsubmitno'])){
                  header('location:after.php');
            }
      }
}
            ?>
</form>
        </body>
        </html>