<?php
	include("../connection.php");

?>



<?php
	$username=$_POST['user_name'];
	$pwd=$_POST['pwd'];
	$sql="select * from user_info where User_name='$username' and Pwd='$pwd'";
	$sql1="select * from pan_details where User_name='$username'";
	$rs=mysql_query($sql);
	$rs1=mysql_query($sql1);
	
	
	if(mysql_num_rows($rs)>0 and mysql_num_rows($rs1)>0)
	{
		$row=mysql_fetch_array($rs);
		$row1=mysql_fetch_array($rs1);
	    $_SESSION['user']=$row;
		$_SESSION['pan']=$row1;
		
		if($_SESSION['user']['Prof_pwd']=="")
		{
			header("location:../Loginpage/profile_pass.php?msg=set Profile password");
		}
		else
		{
			header("location:../Userpage/user_hp.php?msg=");
		}
	}
	else
	{
		header("location:../Loginpage/Login.php?msg=Wrong Username/Password");
		
	}

?>

