<?php
		include("../connection.php");
		include("../Loginpage/security.php");


?>
<script language="javascript" type="text/javascript">
function ch_pwd_check()
	{
		if(document.getElementById("npwd").value=="")
		{
		alert("Please enter a new password")
		return false;	
		}
        if(document.getElementById("cnpwd").value=="")
		{
		alert("Please confirm your new password")
		return false;	
		}

		if(document.getElementById("npwd").value!=document.getElementById("cnpwd").value)
		{
			alert("Passwords don't match. Please Re-Enter");
			document.getElementById("npwd").value="";
			document.getElementById("cnpwd").value="";
			return false;
		}
		return true;
	}
</script>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change Password</title>
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
input{
	border-radius:5px;
	height:2em;
}
	
</style></head>

<body>

<div class="container">
  <div class="header"><a href="../Userpage/user_hp.php"><img src="../Images/logo 1.jpg" alt="LOGO" name="logo" width="10%" height="90px" id="logo" style="background-color: #8090AB; display:block;float:left;" /></a> 
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
                <input type="button" name="Payment" value="Payment/Transfers" onClick="window.location.href='../Userpage/view_beneficiary.php?msg='" style="margin-left:10px;">
                
               
           </div>
           <div class="box" style="background-color:white">
                <h4 style="color:blue; float:left">You are here:</h4>
           </div>
           
           <div class="box1">
              <h4 style="color:blue">Jump To:</h4>
                            <a href="../Userpage/user_hp.php">Account Summary</a>
                  
           
           </div>
           <div class="box2">
           <h4 style="float:left; color:blue; margin-top:3px;">Change Password</h4>
              <div class="box3">
                   <form method="post" action="confirm_pwd_code.php?" id="pwd_form">
                  <div style="margin-top:15px; margin-bottom:15px;">
                  	<table cellpadding="5">     
                    	<tr>
                    		<td><p>Enter New Password:</p></td>
                        	<td><input type="password" name="txt_npwd" id="npwd" /></td>
                    	</tr>
                    	<tr>
                    		<td><p>Confirm New Password:</p></td>
                        	<td><input type="password" name="txt_cnpwd" id="cnpwd" /></td>
                        </tr>
                        <tr>
                            <td><p><input type="submit" name="btn_submit" value="Change Password" id="ch_pwd" style="width:10em; height:2em; color:white; background:#29458F; border-radius:5px; font-size:16px;" onClick="return ch_pwd_check();" /></p>
                    	</tr>
                	</table>
                    </form>
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