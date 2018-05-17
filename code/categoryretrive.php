<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Expense Tracker</title>
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
              <h1><a class="navbar-brand" href="index"><span>E</span>xpenseTracker</a></h1>
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
                    <li><a href="categoryretrive.php">View Categorys</a></li>
                    <li><a href="categories.php">Select Category</a></li>
                  </ul>
                </li>
                
                <li><a href="contact.php" data-hover="Contact">Contact</a></li>
                                    <li><?php echo  $_SESSION['fname'];?></li>
                <li><a href="profile.php" data-hover="Contact">Profile</a></li>
                <li><a href="home.php" data-hover="Contact">log out</a></li>
              </ul>
            </nav>
          </div>
        </nav>
      </div>
    </div>
<style>
<table> {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>

<h2>Category Data Table</h2>
</table>
<table>
  <tr>
    <th>Categories</th>
    <th>Categories Limit</th>
    
  </tr>
  <?php
 $mail=$_SESSION['usrname'];
$query="SELECT * FROM categories WHERE email_id='$mail'";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
 if(!$count < 1)
{
While($row=mysqli_fetch_array($result)){
  
  ?><tr>
               <td><?php echo $row['categories']; ?></td>

                  <td><?php echo $row['categorieslimit']; ?></td> 
       </tr>           
<?php   
}}
?>
  
</table>

</body>
</html>
