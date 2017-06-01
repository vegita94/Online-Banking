<?php 
	include("../connection.php");
	include("../Loginpage/security.php");
?>

<?php

		$cpwd=$_POST['txt_cpwd'];
		$sques1=$_POST['txt_sques1'];
		$sec_ans1=$_POST['txt_sec_ans1'];
		$sec_ans2=$_POST['txt_sec_ans2'];
		$pwd="select Pwd from user_info where User_name='{$_SESSION['user']['User_name']}'";
		$ans1="select que1,ans1 from user_info where User_name='{$_SESSION['user']['User_name']}'";
		$ans2="select ans2 from user_info where User_name='{$_SESSION['user']['User_name']}'";
	    $rs=mysql_query($pwd);
		$rs1=mysql_query($ans1);
		$rs2=mysql_query($ans2);
		    if(mysql_num_rows($rs))
			{
				$row=mysql_fetch_array($rs);
				if($row['0']==$cpwd)
	              { 
		    if(mysql_num_rows($rs1))
			         {
				$row1=mysql_fetch_array($rs1);
					  if($row1['0']==$sques1 && $row1['1']==$sec_ans1)
					  {
						 if(mysql_num_rows($rs2))
						 {
							 $row2=mysql_fetch_array($rs2);
							  
							if($row2['0']==$sec_ans2)
							{
			                    header("location:confirm_pwd.php?msg=Succesful");	  
				            }
						 
		
		                    else
							{
			                     header("location:change_pwd.php?msg=Wrong Answer 2");  
					        }
					    }
					 }
					  else
							{
			                     header("location:change_pwd.php?msg=Wrong Question/Answer 1");  
					        }
				  }
			}
			 else
							{
			                     header("location:change_pwd.php?msg=Wrong Password");  
					        }		  
			}
?>
