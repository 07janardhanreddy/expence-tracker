<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	 </title>
    <body style="background:url(ccc.jpg);background-repeat:no-repeat;background-size: 100% 900%">
    	<p style="color: white "> Expense Tracker :)> </p>
    
	<div align="right">
		<input type="button" value="profile edit" name="profile edit" /></button>
	</div>
	<div align="right">
		<a href="categories.php">categories</a>
		<div align="right">
		<a href="afterlogin.php"><button type="submit" class="btn btn-success" name="profileedit">Submit</button></a>
	</div>
	</div>


	<?php
	if(isset($_POST['profileedit'])){
		$mail=$_SESSION['usrname'];
		?>
		<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>


<th>categories</th>
<th>categorieslist</th>
</tr>
<?php


$query="SELECT `categories`,`categorieslimit` FROM categories WHERE email_id='$mail'";
 $query_run = mysqli_query($con,$query);
while($row = mysqli_fetch_array($query_run)){
	
	echo "<tr>";
	echo "<td>".$categories['categories']."</td>";
	echo "<td>".$categories['categorieslist']."</td>";
	echo "</tr>";
	
}
}
?>
</table>
</body>
</html>