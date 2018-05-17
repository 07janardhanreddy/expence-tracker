<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style>
table {
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
</head>
<body>

<h2>Category Data Table</h2>
<table>
   <?php
 $mail=$_SESSION['usrname'];
$query="SELECT * FROM user_details WHERE email_id='$mail'";
$result=mysqli_query($con,$query);

While($row=mysqli_fetch_array($result)){
  
  ?><tr>
               <td>first name</td><td><?php echo $row['first_name']; ?><a href="editaddress.php">edit</a></td>
</tr>
<tr>
                  <td>last name</td><td><?php echo $row['last_name']; ?><a href="editlastname.php">edit</a></td> </tr>
                 <tr> <td>mobile number</td><td><?php echo $row['mobile']; ?><a href="editmobile.php">edit</a></td></tr>
                 <tr>
                  <td>password</td><td><?php echo $row['password']; ?><a href="editaddress.php">edit</a></td></tr>
      
<?php   
}
?>
  
</table>

</body>
</html>