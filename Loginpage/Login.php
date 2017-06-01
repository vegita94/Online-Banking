<?php
	//include("../Loginpage/security.php");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login page</title>
<link rel="stylesheet" type="text/css" href="../chf.css" />
<script type="text/javascript" language="javascript">
	function check(){
		if(document.login.username.value==""){
			alert('Please Enter Your UserName');
			return false;
		}
			/*var a=/^[a-zA-Z0-9" "]{1,}$/;
			if(!document.login.username.value.match(a))
			{
				alert('Not valid Username');
				return false;
			}*/
			if(document.login.userpwd.value==""){
			alert('Pls Enter Your Password');
			return false;
		}
			var a=/^[a-zA-Z0-9@!#$%^&*]{8,15}$/;
			if(!document.login.userpwd.value.match(a))
			{
				alert('The password must be atleast 8 characters');
				return false;
			}
				
		
		return true;
			
	}
	
	
	
	
</script>
<style type="text/css">

.precontent{
	border:1px solid blue;
	width:100%;
	background:#CEECEB;	
	display:block;
	float:left;	
}
 input:focus{
	 border:3px solid #29458F;
	 
	 
 }
 
 




.content {
	border-top:1px solid blue;
	width:100%;
	float:left;
	display:block;
}


.info{
	display:block;
	float:left;	
	text-align:center;
	font-style:italic;
	font-weight:bolder;
	/*border:1px solid black;*/
	width:100%;
	
}

#title_login{
	
	margin-left:50px;
	color:blue;
	 font-weight:bold; 
	 margin-top:10px; 
	 margin-bottom:10px;
	 width:10%; 
	 display:inline;
	 float:left; 
	 font-size:18px;	
	
}
#logo{
	background-color: #CCCCFF; 
	display: block;
		
}

td input{
	margin-top:10px; 
	margin-bottom:10px; 
	margin-left:10px;
	width:200px; 
	height:2em; 
	border-radius:5px; 
	box-shadow:5px 5px 15px grey;	
	
}


</style>
</head>

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
  <div class="header"><a href="../Homepage/homepage.php"><img src="../Images/logo 1.jpg" alt="LOGO" name="logo" width="10%" height="90px" id="logo" /></a> 
  <div class="subheader"><h1 style="text-align:center; text-decoration:underline; margin-top:10px; float:right;">Indian National Bank</h1></div>
  <!-- end .header --></div>
  <div class="precontent">
  	<p id="title_login" >Login</p>
    <p style=" margin-top:10px; margin-bottom:10px; float:right; color:#09F">Welcome to Personal Internet Banking</p>
  </div>
  
  <div class="content">
  <p style="color:red; display:inline;float:left; margin-left:50px;">(CARE:</p>
  <p style="font-weight:bold;">Username and Password are Case Sensitive.)</p>
  
  <table  style="margin-left:50px; margin-top:10px; display:block; float:left;">
  <form name="login" method="post" onSubmit="return check();" action="login_back.php">
  	<tr>
    	<td><p style="margin-left:0; text-align:left;">Username *</p></td>
    </tr>
    <tr>
    	<td><input type="text" name="user_name" id="username"  autofocus /></td>
    </tr>
    <tr>
    	<td><p style="margin-left:0; text-align:left;">Password *</p></td>
    </tr>
    <tr>
    	<td><input type="password" name="pwd" id="userpwd" autofocus /></td>
    </tr>
    <tr>
    	<td>
        
        	<input type="submit" name="login" value="Login" style="margin-top:30px; font-size: 14px; margin-bottom:20px; height:3em;color:white; background:#29458F; " />
        </td>
    
    </tr>
      </form>
    
  </table>

  <table style="margin-top:50px;">
  	<tr>
    	<td><p><a href="../Register/user_register.php?msg=" style="color:#76C8D1; font-style:italic;">New User? Register Here.</a></p></td>
    </tr>
    
  </table>
  
  
  <!-- end .content --></div>
  
  
  
 <div class="footer">
    <p>&copy;2016 Online Banking</p>
    <p style="float:right;">Site best viewed at 1024 x 768 resolution in I.E 7 or above, Mozilla 3.5 or above, Google Chrome 3 or above, Safari 5.0 +</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>