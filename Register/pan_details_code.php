<?php include("../connection.php"); ?>

<?php
  
	 $uacc_type=$_POST['txtacc_type'];
	 $uacc_no=$_POST['txtacc_no'];
	 $ucif_no=$_POST['txtcif'];
	 $ubr_code=$_POST['txtbrcode'];
	 $upan_no=$_POST['txtpan_no'];
	
	
	
	 echo $user_name=$_SESSION['bregis'][0];
	  echo $user_pwd=$_SESSION['bregis'][1];
	 echo $uname=$_SESSION['bregis'][2];
	 echo $umob_no=$_SESSION['bregis'][3];
	 echo $ustate=$_SESSION['bregis'][4];
	 echo $uemail=$_SESSION['bregis'][5];
	 echo $uaddr=$_SESSION['bregis'][6];
	 echo $userq=$_SESSION['bregis'][7];
	 echo $userques=$_SESSION['bregis'][8];
	 echo $usera=$_SESSION['bregis'][9];
	 echo $userans=$_SESSION['bregis'][10];
	 $sql2="select * from pan_details where Acc_no='$uacc_no' OR CIF_no='$ucif_no' OR PAN_no='$upan_no'";
   $rs2=mysql_query($sql2);
   if(mysql_num_rows($rs2))
      {
		  header("location:user_register.php?msg=The Acc-no/Pan-no/CIF-no already exists");
	  }
	  else
	  {
	
	$sql1="insert into user_info (User_name,Pwd,Name,Mob_no,State,Email,Address,que1,que2,ans1,ans2) values('$user_name','$user_pwd','$uname','$umob_no','$ustate','$uemail','$uaddr','$userq','$userques','$usera','$userans')";
	
	$sql="insert into pan_details (Acc_no,Acc_type,CIF_no,Branch_code,PAN_no,User_name) values('$uacc_no','$uacc_type','$ucif_no','$ubr_code','$upan_no','$user_name')";
	
	
	
	$s=mysql_query($sql);
	$s1=mysql_query($sql1);
	
	
	if($s==1 and $s1==1)
	{
			
		header("location:../prelogin.php?msg=registered succesfully");
		
	}
	else
	{
		
		header("location:pan_details.php?msg=registeration unsuccesful");
	}
	//session_destroy();
	  }
?>