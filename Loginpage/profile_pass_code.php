<?php
	include("../connection.php");
?>


<?php
	$propwd=$_POST['txt_propass'];
	$hintq=$_POST['h_ques'];
	$hinta=$_POST['txt_hans'];
	
	$sql="Update user_info set Prof_pwd='$propwd',Prof_hintq='$hintq',Prof_hinta='$hinta' where User_name='{$_SESSION['user']['User_name']}'";
	
	$rs=mysql_query($sql);
	if($rs==1)
	{
		header("location:../Userpage/user_hp.php?msg=Profile pass set");
	}
	else
	{
		header("location:profile_pass.php?msg=Profile pass not set");	
	}

?>