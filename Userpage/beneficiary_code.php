<?php
	include("../connection.php");


?>


<?php
	
	$ben_name=$_POST['txt_name'];
	$ben_accno=$_POST['txt_acc_no'];
	$ben_amttr=$_POST['txt_inr'];
	 echo $u_acc_no=$_POST['user_acc_no'];
	 
	 $sql2="select * from beneficiary_details where Acc_no='$u_acc_no' and Ben_acc_no='$ben_accno'";
	 $rs2=mysql_query($sql2);
	 
	 if(mysql_num_rows($rs2))
	 {
	 	header("Location:manage_beneficiary.php?msg=Beneficiary Already Exists");
	 }
	 else
	 {
	
	$sql1="select Bal from pan_details where Acc_no='$u_acc_no'";
	$rs1=mysql_query($sql1);
	
	if(mysql_num_rows($rs1))
	{
		$row=mysql_fetch_array($rs1);
		if($ben_amttr >= $row['0'])
		{
		
			header("location:manage_beneficiary.php?msg=Donot have Sufficient Balance");	
			
		}
		
		
		else
		{
			
	
				$sql="Insert into beneficiary_details (Acc_no,Ben_acc_no,Ben_name,Amt_transfer) Values('$u_acc_no','$ben_accno','$ben_name','$ben_amttr')";
	
				$rs=mysql_query($sql);
	
				if($rs==1)
				{
				
					header("location:profile.php?msg=beneficiary Added");	
				}
				else
				{
					header("location:profile.php?msg=beneficiary not Added");
				}
		}
		
	}
		
	 }
?>