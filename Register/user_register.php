
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Register page</title>
<link rel="stylesheet" type="text/css" href="../chf.css">
<script type="text/javascript" language="javascript">
	function check(){
		
		if(document.uregister.u_username.value==""){
			alert('Please Enter a  New UserName ');
			return false;	
		}
			if(document.uregister.u_panno.value==""){
			alert('Please Enter Your PAN Number ');
			return false;	
		}
		var panno=/^[a-zA-Z0-9]{1,10}$/;
		if(!document.uregister.u_panno.value.match(panno)){
			alert('Enter valid 10 digit PAN number');
			return false;	
		}
			var username=/^[a-zA-Z0-9]{1,}$/;
		if(!document.uregister.u_username.value.match(username)){
			alert('Enter valid UserName');
			return false;	
		}
		if(document.uregister.u_pwd.value==""){
			alert('Please Enter a New Password');
			return false;	
		}
			var name=/^[a-zA-Z!@#$%^&*0-9]{8,15}$/;
		if(!document.uregister.u_pwd.value.match(name)){
			alert('Enter valid Password(Have atleast one a-z,one A-Z,one 0-9 )');
			return false;	
		}
		if(document.uregister.u_repwd.value==""){
			alert('Please Re-Enter the Password');
			return false;	
		}
			var name=/^[a-zA-Z!@#$%^&*0-9]{8,15}$/;
		if(!document.uregister.u_repwd.value.match(name)){
			alert('Enter valid Password(Have 8-15 characters, atleast one a-z,one A-Z,one 0-9 and one (!@#$%^&*))');
			return false;	
		}
		if(document.uregister.u_s_ques.value=="--Select--"){
			alert('Please Choose your Question');
			return false;	
		}
		if(document.uregister.ans1.value==""){
			alert('Please Enter your Answer');
			return false;	
		}
		if(document.uregister.question.value==""){
			alert('Please Enter your Question');
			return false;	
		}
		if(document.uregister.ans2.value==""){
			alert('Please Enter your Answer');
			return false;	
		}
		return true;
		
	}
	
	function checkpass(){
		if(document.uregister.u_repwd.value!=document.uregister.u_pwd.value)
		{
			alert('Your Password Doesnot Match');
			return false;
		}
		
		return true;	
	}
	
	
</script>
<style>
	.t1{
    	float:left;
		display:block;
    }
	.red{
		color:red; 
		display:inline;
		font-size:12px;
		font-weight:bold;
	}
	input, select{
		box-shadow:5px 5px 15px #CCC;
		height:2em;
		width:20em;
		border-radius:5px;
	}
	input:focus{
	 border:3px solid #29458F;
	 
	 
 }
 textarea:focus{
	border:3px solid #29458F;
 }
 select:focus{
	 border:3px solid #29458F;
 }
	textarea{
		box-shadow:5px 5px 15px #CCC;
		border-radius:5px;	
		
	}
	.t1 p{
		margin:10px;
		color:red;
		visibility:hidden;
	}
	.content{
	border-top:2px solid blue;
	float:left;
	display:block;
	width:100%;	
		
	}
	span{
	color:red;	
			
	}
	
	#logo{
	background-color: #CCCCFF; 
	display: block;
		
}

</style>
</head>

<body>
<?php
							
							$msg=$_GET['msg'];
					if($msg!="")
{
	
 ?>
 
 <script>alert('<?php echo $msg; ?>');</script>
 <?php
}
?>

<div class="container">
  <div class="header"><a href="../Homepage/homepage.php"><img src="../Images/logo 1.jpg" alt="LOGO" name="logo" width="10%" height="90px" id="logo" /></a>
  <div class="subheader"><h1 style="text-align:center; text-decoration:underline; margin-top:10px; float:right;">Indian National Bank</h1></div> 
    <!-- end .header --></div>
  <div class="content" style=" height:500px; overflow-y:scroll;">
  		<table class="t1"  style="margin-top:20px;margin-left:25%;"> 
        	<form method="post" name="uregister" onSubmit="return check();" action="user_register_code.php">
            	<!--<tr>
                    <td>Name&nbsp;<span>*</span></td><td><input type="text" name="txt_name" id="u_name"/></td>
                    <td><p>Enter the Full Name.</p></td 
                ></tr>
                <tr>
                	<td>Address&nbsp;<span>*</span></td><td><textarea rows="5" cols="50" name="txt_addr" id="u_addr"></textarea></td>
                	<td><p>Enter the Address.</p></td>
                </tr>
                <tr>
                    <td>Mobile Number&nbsp;<span>*</span></td><td><input type="textbox" name="txt_mobno" id="u_mobno"/></td>
                	<td><p>Enter Mobile Number</p></td>
                </tr>
                <tr>
                    <td>State&nbsp;<span>*</span></td>
                     <td> <select name="txt_state" id="u_state" style="width:15em;">
                    <option disabled selected>--Select--</option>
                    <option value="AP1">Andhra Pradesh</option>
                    <option value="AP">Arunachal Pradesh</option>
                    <option value="AS">Assam</option>
                    <option value="BHR">Bihar</option>
                    <option value="CH">Chhattisgarh</option>    
                    <option value="GOA">Goa</option>
                    <option value="GJ">Gujarat</option>
                    <option value="HAR">Haryana</option>
                    <option value="HP">Himachal Pradesh</option>
                    <option value="JAK">Jammu & Kashmir</option>
                    <option value="JH">Jharkand</option>
                    <option value="KAR">Karnataka</option>
                    <option value="KER">Kerala</option>
                    <option value="MP">Madhya Pradesh</option>
                    <option value="MH">Maharashtra</option>
                    <option value="MNP">Manipur</option>
                    <option value="MG">Meghalaya</option>
                    <option value="MIZ">Mizoram</option>
                    <option value="NG">Nagaland</option>
                    <option value="ODH">Odisha</option>
                    <option value="PJ">Punjab</option>
                    <option value="RJ">Rajasthan</option>
                    <option value="SK">Sikkim</option>
                    <option value="TN">Tamil Nadu</option>
                    <option value="TLG">Telangana</option>
                    <option value="TRP">Tripura</option>
                    <option value="UP">Uttar Pradesh</option>
                    <option value="UK">Uttarakhand</option>
                    <option value="WB">West Bengal</option>
                    
                    </select>
                    </td>
                	<td><p>Enter the state</p></td>
                </tr>
                <tr>
                    <td>Email&nbsp;<span>*</span></td><td>
                    <input type="email" name="txt_email" id="u_email"/></td>
                	<td><p>Enter your Email.</p></td>
                </tr>-->
                <tr>
                    <td>UserName&nbsp;<span>*</span></td><td><input type="text" name="txt_username" id="u_username" /></td>
                	<td><p>Enter a UserName.</p></td>
                </tr>
                <tr>
                    <td>PAN No&nbsp;<span>*</span></td><td><input type="text" name="txt_panno" id="u_panno" /></td>
                	<td><p>Enter a Pan No.</p></td>
                </tr>
                <tr>
                    <td>Password&nbsp;<span>*</span></td><td><input type="password" name="txt_pwd" id="u_pwd"/></td>
                	<td><p>Enter a New password.</p></td>
                </tr>
                <tr>
                    <td>Re-Enter Password&nbsp;<span>*</span></td><td><input type="password" onChange="return checkpass();" name="txt_repwd" id="u_repwd"/></td>
                	<td><p>Enter your Password again.</p></td>
                </tr>
                
                 <tr>
                    <td>Security Question1&nbsp;<span>*</span></td><td><select name="s_ques" id="u_s_ques" style="width:10em;">
                    	<option disabled selected>--Select--</option>
                        <option>What was the first book i ever read?</option>
                        <option>What was the first company i ever worked for?</option>
                        <option>What is my partner's middle name?</option>
                        <option>What is the first name of my oldest cousin?</option>
                    
                    </select></td>
                	<td><p>Select Your Security question.</p></td>
                </tr>
                <tr>
                    <td>Enter Your Answer&nbsp;<span>*</span></td>
                    <td><input type="text" name="ans" id="ans1" /></td>
                </tr>
                <tr>
                    <td>Enter a Security Question(Question 2)&nbsp;<span>*</span></td>
                    <td><input type="text" name="que" id="question" /></td>
                </tr>
                <tr>
                    <td>Enter Your Answer&nbsp;<span>*</span></td>
                    <td><input type="text" name="answ" id="ans2" /></td>
                </tr>
                <tr>
                <td> Captcha:</td><td><input type="text" name="cap" /></td>
    				<td><img src="captcha.php" style="border:1px dashed blue;"></td>
                </tr>
                <tr> 
                   
                    <td colspan="2" align="center"><input type="submit" name="btn_submit" onClick="return checkpass();"  style="width:10em; height:3em; background:#29458F; color:white; font-size:medium;" /></td>
                </tr>
                
            </form>
        </table>
    <!-- end .content --></div>
  <div class="footer">
    <p>&copy;2016 Online Banking</p>
    <p style="float:right;">Site best viewed at 1024 x 768 resolution in I.E 7 or above, Mozilla 3.5 or above, Google Chrome 3 or above, Safari 5.0 +</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>