<?php
	session_start();
	include("../Loginpage/security.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="../box.css" />
<link rel="stylesheet" type="text/css" href="../chf.css" />

<style type="text/css">
<!--
.t1{
		/*padding: 0px 100px 0px 100px;
		margin:20px 0px 20px 0px;*/
		display:block;
		float:left;
		/*border:1px solid black;*/
	}
	.t1 ul{
		
	}
	
	.t1 ul li{
		list-style-type:square;	
			padding:25px 50px 25px 0px;
		margin-left:150px;
	}
	
	.menu{
		width:100%;
		height:40px;
		background-color:#6CF;
		display:block;
		float:left;
	}
	
	.menu ul li{
		float:left;
		display:block;
		margin-top:8px;
		padding-left:20px;	
	}
	nav{
		width:25%;
		float:left;
		display:block;
	}
	nav ul {
		list-style: none;
		border-top: 1px solid #666;	
		margin-bottom: 15px;
	}
	nav ul li {
		border-bottom: 1px solid #666;
	}
	nav ul a, nav ul a:visited {
		padding: 5px 5px 5px 15px;
		display: block;	
		text-decoration: none;
		background-color: #8090AB;
		color: #000;
	}
	nav ul a:hover, nav ul a:active, nav ul a:focus { 
		background-color: #6F7D94;
		color: #FFF;
	}
	.box1 a{
	margin-left:10px;
	display:block;	
}

</style></head>

<body>
<?php  $u=$_GET['msg'];
if($u!="")
{
	
 ?>
 
 <script>alert('<?php echo $u; ?>');</script>
 <?php
}
?>

<div class="container">
  <div class="header"><a href="../Userpage/user_hp.php?msg="><img src="../Images/logo 1.jpg" alt="LOGO" name="logo" width="10%" height="90px" id="logo" style="background-color: #8090AB; display:block;float:left;" /></a> 
    <div class="subheader"><h1 style="text-align:center; text-decoration:underline; margin-top:10px; float:right;">Indian National Bank</h1>
    <h4 style="color:blue; position:relative; left:650px; top:70px">Welcome:&nbsp;&nbsp;<?php echo $_SESSION['user']['Name'] ?> </h4>
    </div>
    </div>
  <div class="content">
           <div class="box">
                  <input type="button" name="Ab" value="Add Beneficiary" onClick="window.location.href='../Userpage/manage_beneficiary.php?msg='" style="margin-left:3px;">
                   <input type="button" name="Profile" value="Profile" onClick="window.location.href='../Userpage/profile.php?msg='" style="margin-left:3px;">
                
                <input type="button" name="logout" value="Logout"  onClick="window.location.href='../Loginpage/logout.php'" style="float:right; margin-right:10px;">
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
           		<h4 style="float:left; color:blue; margin-top:3px; text-decoration:underline;">Profile</h4>
           		    <div class="t1">
                   
           <div>
           		<p>
                	Select a link in the list to acces specific functionality in the profile. To view a description about the functionality.
                </p>
           </div>
        <div class="t1"  >
            <ul>
            	<li><a href="personal_details.php">Personal Details</a></li>
                <li><a href="change_pwd.php?msg=">Change Password</a></li>
              
            </ul>
        </div>
       <!-- <div class="t1" style="">
            <ul>
            	<li><a href="#">High Secutity Options </a></li>
                <li><a href="#">Define Limit</a></li>
            </ul>
        </div>-->
    
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