<?php
		include("../connection.php");
		include("../Loginpage/security.php");


?>

<?php
	echo $accno=$_POST['detail'];
	echo $baccno=$_POST['detail1'];
	echo $pro_pass=$_POST['pro_pass'];
	
	$sql="select Prof_pwd from user_info where User_name in(select User_name from pan_details where Acc_no='$accno')";
	$rs=mysql_query($sql);
	
	if(mysql_num_rows($rs))
	{
		$row=mysql_fetch_array($rs);
		echo $row['0'];
		if($row['0']==$pro_pass)
		{
			$sql1="select Ben_name,Amt_transfer from beneficiary_details where Acc_no='$accno' and Ben_acc_no='$baccno'";
			$rs1=mysql_query($sql1);
			
			if(mysql_num_rows($rs1))
			{
				$row1=mysql_fetch_array($rs1);
				$sql2="select Bal from pan_details where Acc_no='$accno'";
				$rs2=mysql_query($sql2);
				if(mysql_num_rows($rs2))
				{
					$row2=mysql_fetch_array($rs2);
					echo $row2['0'];
					if($row1['1']<=$row2['0'])
					{
						$ubal1=$row2['0']-$row1['1'];
					
						$sql3="Update pan_details set Bal='$ubal1' where Acc_no='$accno'";
						$rs3=mysql_query($sql3);
						$date=date("y-m-d");
						$amt=$row1['1'];	
						$sql7="insert into transaction (tran_date,Ref_det,Acc_no,Credit_amt,Debit_amt) values ('$date','Debited','$accno','0','$amt')";
						$sql7=mysql_query($sql7);
					
					
						$sql4="select * from pan_details where Acc_no='$baccno'";
						$rs4=mysql_query($sql4);
					
						if(mysql_num_rows($rs4))
						{
							$sql5="select Bal from pan_details where Acc_no='$baccno'";
							$rs5=mysql_query($sql5);
							if(mysql_num_rows($rs5))
							{
								$row5=mysql_fetch_array($rs5);
								echo $row5['0'];
								$ubal2=$row5['0']+$row1['1'];
					
								$sql6="Update pan_details set Bal='$ubal2' where Acc_no='$baccno'";
								$rs6=mysql_query($sql6);
								$sql8="insert into transaction (tran_date,Ref_det,Acc_no,Credit_amt,Debit_amt) values ('$date','Credited','$baccno','$amt','0')";
								$rs8=mysql_query($sql8);
								header("location:user_hp.php?msg=Transfer Successful");
							}
						
						}
						else{
							header("location:user_hp.php?msg=Transfer Successful");
						}
						
					}else{
						header("location:user_hp.php?msg=Donot Have Sufficient Balance for Transfer");
						}
					
				
					}
					
				
				}
				
			}
			else
			{
				header("location:view_beneficiary.php?msg=Wrong Profile Password");
			}
		
	}
	
	
	
	
	
?>