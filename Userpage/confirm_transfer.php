<?php
		include("../connection.php");
		include("../Loginpage/security.php");


?>
<script type="text/javascript" language="javascript">
	function check(){
		if(document.transfer.pro_pass.value==""){
			alert('Please Enter your profile password');
			return false;	
		}
		return true;
	}
	</script>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Confirm Transfer</title>
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

td{
	margin:20px;
		
}

.box1 a{
	margin-left:10px;
	display:block;	
}
input:focus{
	 border:3px solid #29458F;
	 
	 
 }
</style></head>

<body>

<?php
	 $msg=$_GET['bid'];
	 $baccno=$_GET['baccno'];
	 
?>
	

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
              <a href="../Userpage/user_hp.php">Account Summary</a>
                  
           
           </div>
           <div class="box2">
           <h4 style="float:left; color:blue; margin-top:3px;">Confirm Profile Password For Completion of Transaction</h4>
              <div class="box3">
              <form name="transfer" method="post" action="confirm_transfer_code.php" onSubmit="return check();">
              		<table  style=" border-collapse:collapse;" width="100%">
                    	<tr>
                        	<td><p style="margin:10px;">Enter the Profile Password</p></td>
                            <td><input type="password" name="pro_pass" style=" border-radius:5px;" id="txt_pro_pass" /></td>
                   
                        </tr>
                        <input type="hidden" name="detail" value="<?php  echo $msg; ?>"/>
                        <input type="hidden" name="detail1" value="<?php  echo $baccno; ?>"/>
                        
                        
                        <tr>
                        	<td><input style="float:right; width:63m; height:2em; font-weight:bold; font-size:16px;background:#29458F; color:white;" type="submit" name="btn_submit" value="Transfer" /></td>
                        
                        </tr>
                    </table>
                    
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