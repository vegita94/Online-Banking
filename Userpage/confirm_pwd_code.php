<?php
	include("../connection.php");


?>


<?php
	
	$npwd=$_POST['txt_npwd'];
	$sql="Update user_info set Pwd='$npwd' where User_name='{$_SESSION['user']['User_name']}'";
	$rs=mysql_query($sql);
	if($rs==1)
	{   
	   header("location:profile.php?msg=Pasword Successfully Changed");
	}
?>
		
	
	