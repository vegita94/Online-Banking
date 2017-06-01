<?php include("../connection.php"); ?>

<?php
	$acc_type=$_POST['txt_acc_type'];
    $acc_no=$_POST['txt_acc_no'];
	$cif_no=$_POST['txt_cif'];
	//$br_code=$_POST['txt_brcode'];
	//$pan_no=$_POST['txt_pan_no'];	
	
	$sql1="select Acc_no,Acc_type,CIF_no,Branch_code,PAN_no from pan_details where User_name='{$_SESSION['user']['User_name']}'";
	$rs1=mysql_query($sql1);
	
	if(mysql_num_rows($rs1))
	{
		$row1=mysql_fetch_array($rs1);
		$br_code=$row1['3'];
		$pan_no=$row1['4'];
		$username=$_SESSION['user']['User_name'];
		
		
		if($acc_no==$row1['0'] or $acc_type==$row1['1'] or $cif_no==$row1['2'])
		{
			header("location:Add_acc.php?msg=ACCOUNT-NO OR ACCOUNT-TYPE OR CIF-NO ALREADY EXISTS");
		}
		else
		{
	
	$sql="insert into pan_details (Acc_no,Acc_type,CIF_no,Branch_code,PAN_no,User_name) values('$acc_no','$acc_type','$cif_no','$br_code','$pan_no','{$_SESSION['user']['User_name']}')";
	
	$s=mysql_query($sql);
	
	if($s==1)
	{
		header("location:../Userpage/user_hp.php?msg=registered succesfully");
	}
	else
	{
		header("location:Add_acc.php?msg=registeration unsuccesful");
	}
	

		}
	}
?>