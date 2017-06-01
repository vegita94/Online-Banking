<?php 
	include("../connection.php");
	include("../Loginpage/security.php");
?>
<?php
$bacc=$_POST['bacno'];
$amt=$_POST['amt'];
$acno=$_POST['acn'];

echo $sql="Update beneficiary_details set Amt_transfer='$amt' where Ben_acc_no='$bacc' and Acc_no='$acno'";

echo $r=mysql_query($sql);
if($r==1)
{
header("location:view_beneficiary.php?msg=Beneficiary Updated");
}
else
{
	header("location:view_beneficiary.php?msg=Beneficiary not Updated");
}
?>