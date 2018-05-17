<?php
session_start();
require 'config.php';
?>
 <!Doctype html>
 <html>
 <body>
      <form action="" method="POST">
      	<table>
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
      $limit=$_POST['limit'];
      $query="UPDATE `categories` SET `categorieslimit`=[$limit] WHERE email_id='$mail" and ;
}
      ?>
0
</form>
        </body>
        </html>