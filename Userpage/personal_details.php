<?php include("../connection.php");
		include("../Loginpage/security.php");
 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Personal Details</title>
<link rel="stylesheet" type="text/css" href="../box.css" />
<link rel="stylesheet" type="text/css" href="../chf.css" />

<style type="text/css">
</style>
</head>

<body>

<div class="container">
  <div class="header"><a href="../Userpage/user_hp.php?msg="><img src="../Images/logo 1.jpg" alt="LOGO" name="logo" width="10%" height="90px" id="logo" style="background-color: #8090AB; display:block;float:left;" /></a> 
    <div class="subheader"><h1 style="text-align:center; text-decoration:underline; margin-top:10px; float:right;">Indian National Bank</h1>
    <h4 style="color:blue; position:relative; left:600px; top:70px">Welcome:&nbsp;&nbsp;<?php echo $_SESSION['user']['Name'] ?> </h4>
    </div>
    </div>
  <div class="content">
           <div class="box">
               <input type="button" name="Ab" value="Add Beneficiary" onClick="window.location.href='../Userpage/manage_beneficiary.php?msg='" style="margin-left:3px;">
                   <input type="button" name="Profile" value="Profile" onClick="window.location.href='../Userpage/profile.php?msg='" style="margin-left:3px;">
                <input type="button" name="logout" value="Logout" onClick="window.location.href='../Loginpage/logout.php'" style="float:right">
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
           		<div>
                	<table width="100%;" cellpadding="10px;" style="border-collapse:collapse;">
                    	
                        <?php
							$sql="select * from user_info where User_name='{$_SESSION['user']['User_name']}'";
							$sql1="select Acc_no from pan_details where User_name='{$_SESSION['user']['User_name']}'";
							
							$rs=mysql_query($sql);
							$rs1=mysql_query($sql1);
							
							if(mysql_num_rows($rs))
							{
								$row=mysql_fetch_array($rs);
								$row1=mysql_fetch_array($rs1);
								
									?>
                        				<tr>
                                        	<td style="font-weight:bold; width:30%;"><p>Name:&nbsp;</p></td>
                        					<td><p><?php echo $row['Name']; ?></p></td>
                                        </tr>
                                       <!-- <tr>
                                        	<td style="font-weight:bold;"><p>Account Number:&nbsp;</p></td>
                                            <td><p><?php echo $row1['Acc_no']; ?></p></td>
                                        </tr> -->
                                        <tr>
                                        	<td style="font-weight:bold;"><p>Address:&nbsp;</p></td>
                                            <td><p><?php echo $row['Address']; ?></p></td>
                                        </tr>
                                        <tr>
                                        	<td style="font-weight:bold;"><p>Contact:&nbsp;</p></td>
                                            <td><p><?php echo $row['Mob_no']; ?></p></td>
                                        </tr>
                                        <tr>
                                        	<td style="font-weight:bold;"><p>Email Address:&nbsp;</p></td>
                                            <td><p><?php echo $row['Email']; ?></p></td>
										</tr>
                        <?php
								
							}
							else
							{
								
							}
						?>
                    </table>
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