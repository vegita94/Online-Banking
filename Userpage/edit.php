<?php
		include("../connection.php");
		include("../Loginpage/security.php");


?>
<script type="text/javascript"> 
function check(){
    
		if(document.edt.amt.value=="")
		{
			alert('Please Enter an amount');
			return false;	
			
		}
}

</script>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Template</title>
<link rel="stylesheet" type="text/css" href="../chf.css" />
<link rel="stylesheet" type="text/css" href="../box.css" />
<style type="text/css">


.box7 {
	margin-top:10px;
	height:40px;
	width:100%;
	border:2px solid black;
	display:block;
	float:left;
	background-color:#999;
	
}

.box1 a{
	margin-left:10px;
	display:block;	
}
table th{
	border-bottom:3px solid black;
}
</style></head>

<body>
<?php
$bacc=$_GET['key'];
echo $acc=$_GET['msg'];
?>
<div class="container">
  <div class="header"><a href="../Userpage/user_hp.php?msg="><img src="../Images/logo 1.jpg" alt="LOGO" name="logo" width="10%" height="90px" id="logo" style="background-color: #8090AB; display:block;float:left;" /></a> 
    <div class="subheader"><h1 style="text-decoration:underline; margin-top:10px; float:right;">Indian National Bank</h1>
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
              <a href="../../Userpage/user_hp.php">Account Summary</a>
                  
           
           </div>
           <div class="box2">
           <h4 style="float:left; color:blue; margin-top:3px;">Edit Beneficiary</h4>
              <div class="box3">
                       <?php
					   $sql="Select * from beneficiary_details where Ben_acc_no='$bacc' and Acc_no='$acc'";
					   $rs=mysql_query($sql);
					   if(mysql_num_rows($rs))
					   {
						   $row=mysql_fetch_array($rs);
					   }
					   ?>    
              <form method="post" name="edt" action="edit_code.php" onSubmit="return check();">
              <table style="text-align:center;border-collapse:collapse;"  width="100%">
                        	<tr >
                            	<th><p>Beneficiary Account Number: </p></th>
                                <th><p>Beneficiary Name: </p></th>
                                <th><p>Amount: </p></th>
                                
                            </tr>
                       
                      <tr>
                      <td><?php echo $row[2] ?></td>
                      <td><?php echo $row[3] ?></td>        
                       <td><input type="text" name="amt" value="<?php echo $row[4]; ?>" autofocus style="border-radius:5px; height:2em;"></td>
                       </tr>
                       <tr>
                       <td colspan="3"><input type="submit" name="sub" value="Update" style=" width:6em; height:2em; margin:10px; background:#29458F; color:white; border-radius:5px;"></td>
                     </tr>
               </table>
               <input type="hidden" name="bacno" value="<?php echo $row[2]; ?>">
               <input type="hidden" name="acn" value="<?php echo $acc;?>" >
               </form>         
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