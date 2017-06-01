<?php include("../connection.php");
	include("../Loginpage/security.php");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Last 10 Transaction</title>
<link rel="stylesheet" type="text/css" href="../chf.css">
<link rel="stylesheet" type="text/css" href="../box.css">

<style type="text/css">
<!--
box6 {
	height:33px;
	border:none;
}
box3 {
      height:340px;	
}

.box1 a{
	margin-left:10px;
	display:block;	
}

</style></head>

<body>

<div class="container">
  <div class="header"><a href="../Userpage/user_hp.php?msg="><img src="../Images/logo 1.jpg" alt="LOGO" name="logo" width="10%" height="90px" id="logo" style="background-color: #8090AB; display:block;float:left;" /></a> 
    <div class="subheader"><h1 style="text-align:center; text-decoration:underline; margin-top:10px; float:right;">Indian National Bank</h1>
    <h4 style="color:blue; position:relative; left:650px; top:70px">Welcome:<?php echo $_SESSION['user']['Name'] ?></h4>
    </div>
    </div>
  <div class="content">
           <div class="box">
                <input type="button" name="Ab" value="Add Beneficiary" onClick="window.location.href='../Userpage/manage_beneficiary.php?msg='" style="margin-left:3px;">
                   <input type="button" name="Profile" value="Profile" onClick="window.location.href='../Userpage/profile.php?msg='" style="margin-left:3px;">
                <input type="button" name="logout" value="Logout" onClick="window.location.href='../Loginpage/logout.php'" style="float:right; margin-right:10px;">

           </div>
           <div class="box" style="background-color:grey;">
                <input type="button" name="Find_transaction" value="Find Transaction" onClick="window.location.href='../Userpage/Find_transaction.php?msg='" style="margin-left:3px;">
                <input type="button" name="Payment" value="Payment/Transfers" onClick="window.location.href='../Userpage/view_beneficiary.php?msg='"  style="margin-left:3px;">
               
                
           </div>
           <div class="box" style="background-color:white">
                <h4 style="color:blue; float:left">You are here:</h4>
           </div>
           
           <div class="box1">
              <h4 style="color:blue">Jump To:</h4>
             
              <a href="../Userpage/user_hp.php?msg=">Account Summary</a>
                  

           
           </div>
           <div class="box2">
           
           <?php 
		   			$acc_no=$_POST['Accno'];
					$sql1="select Acc_type,Bal from pan_details where Acc_no='$acc_no'";
									$rs1=mysql_query($sql1);
									
									if(mysql_num_rows($rs1))
									{
										$row1=mysql_fetch_array($rs1);
											
										
									}
		   ?>
           <h4 style="float:left; color:blue; margin-top:3px; text-decoration:underline;">Your Last 10 Transactions</h1>
              <div class="box3">
                    <div class="box4">
                    <table border="2" style="width:100%;">
                         <tr >
                            <td><p style="font-weight:bold;">Account Number:</p></td>
                           <td ><p><?php echo $acc_no; ?></p></td>
                         </tr>
                         <tr>   
                            <td><p style="font-weight:bold;">Name:</p></td>
                            <td><p><?php echo $_SESSION['user']['Name']; ?></p></td>
                         </tr>   
                         <tr>   
                            <td><p style="font-weight:bold;">Account Type:</p></td>
                            <td><p><?php echo $row1['0']; ?></p></td>
                         </tr>
                         <tr>   
                            <td><p style="font-weight:bold;">Available Balance:</p></td>
                            <td><p><?php echo $row1['1']; ?></p></td>
                          </tr>
                     </table>     
                    </div>
                    <div class="box5">
                         <div class="box6">
                             <table border="2" width="100%" style="border-collapse:collapse;">
                                  <tr>
                                     <th><p>Date</p></th>
                                     <th><p style="">Details</p></th>
                                     <th><p style=" ">Debit</p></th>  
                                     <th><p style=" ">Credit</p></th>
                                   
                                   </tr>  
                                   
								   					
								    
                                     <?php
									 
									 
									  for($x = 0; $x <= 9; $x++)
									 { ?>
                                        
										   <?php 
										   			
										   			$sql="select Tran_date,Ref_det,Credit_amt,Debit_amt from transaction where Acc_no='$acc_no' ORDER BY Tran_id desc LIMIT $x,9";
													
													$rs=mysql_query($sql);
													
													if(mysql_num_rows($rs))
													{
													
														$row=mysql_fetch_array($rs);
														
														//for($x = 1; $x <= 10; $x++){
															?>
															<tr>
                                           <td><p ><?php echo $row['0']; ?></p></td>
                                           <td>
                                           	<p style=" margin-left:50px;"><?php	echo $row['1']; ?>
										    </p>
										   </td>
                                           <td><p style=" margin-left:80px;"><?php	echo $row['2']; ?></p></td>  
                                           <td><p style=" margin-left:50px;"><?php	echo $row['3'];?></p></td>
                                          
                                         </tr> 
													
                                                     <?php
													}
													
							 					else
													{
														?>
														  <tr>
														   <td colspan="4" style="text-align:center;"><p><?php echo'NO RECORDS'; ?></p></td>
														</tr>
                                                        <?php
															
													}
							}
													
							 ?>
													
                             </table>
                         </div>
                    </div>
                        
              </div>
           </div>
        <!-- end .content --></div>
  <div class="footer">
    <p>&copy;2016 Online Banking</p>
    <p style="float:right;">Site best viewed at 1024 x 768 resolution in I.E 7 or above, Mozilla 3.5 or above, Google Chrome 3 or above, Safari 5.0 +</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>