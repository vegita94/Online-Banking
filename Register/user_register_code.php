<?php
 include("../connection.php");

?>


<?php
 /*$name=$_POST['txt_name'];
 $addr=$_POST['txt_addr'];
 $mobno=$_POST['txt_mobno'];
 $state=$_POST['txt_state'];
 $email=$_POST['txt_email'];*/
 $username=$_POST['txt_username'];
 $userpwd=$_POST['txt_pwd'];
 $userq=$_POST['s_ques'];
 $userques=$_POST['que'];
 $usera=$_POST['ans'];
 $userans=$_POST['answ'];
 $pan=$_POST['txt_panno'];
 $caprec=$_POST['cap'];
 $code=$_SESSION['capp'];
 if($code == $caprec){
   $sql="select * from user_info where User_name='$username'";
   $rs=mysql_query($sql);
   if(mysql_num_rows($rs))
      {
		  header("location:user_register.php?msg=The Username already exist");
	  }
	  else
	  {

/*$_SESSION['bregis']=array();
$_SESSION['bregis'][]=$username;
$_SESSION['bregis'][]=$userpwd;
$_SESSION['bregis'][]=$name;
$_SESSION['bregis'][]=$mobno;
$_SESSION['bregis'][]=$state;
$_SESSION['bregis'][]=$email;
$_SESSION['bregis'][]=$addr;
$_SESSION['bregis'][]=$userq;
$_SESSION['bregis'][]=$userques;
$_SESSION['bregis'][]=$usera;
$_SESSION['bregis'][]=$userans;
*/
	   $sql3="select * from user_info where PAN_no='$pan'";
	   $rs3=mysql_query($sql3);
	   if(mysql_num_rows($rs3))
	   {
	  		 $sql1="Update user_info set User_name='$username',Pwd='$userpwd',que1='$userq',que2='$userques',ans1='$usera',ans2='$userans' where PAN_no='$pan'";
	  		 $rs1=mysql_query($sql1);
			 if($rs1==1)
			 {
				  $sql4="Update pan_details set User_name='$username' where PAN_no='$pan'";
				  $rs4=mysql_query($sql4);
				  if($rs4==1){  
				  header("location:../prelogin.php?msg=Successfully Register");
				  }
			 }
	   

	  		
	   }
	   else
	   {
			header("location:user_register.php?msg=The Account does not exist");
	   }

     }
 }
 else{
	 header("location:user_register.php?msg=Incorrect Captcha");
 }
?>