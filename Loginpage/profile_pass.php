<?php
		session_start();
		include("../Loginpage/security.php");


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Set Profile Password</title>
<link rel="stylesheet" type="text/css" href="../chf.css" />
<link rel="stylesheet" type="text/css" href="../box.css" />

<script type="text/javascript" language="javascript">
	function check(){
		if(document.u_propass.u_prop.value==""){
			alert('Please Enter New Profile Password');
			return false;
		}
			var a=/^[a-zA-Z0-9@!#$%^&*]{8,15}$/;
			if(!document.u_propass.u_prop.value.match(a))
			{
				alert('Not valid Password');
				return false;
			}
			if(document.u_propass.u_cprop.value==""){
			alert('Please Confirm Your Password');
			return false;
		}
			var a=/^[a-zA-Z0-9@!#$%^&*]{8,15}$/;
			if(!document.u_propass.u_cprop.value.match(a))
			{
				alert('Not valid Password');
				return false;
			}
			if(document.u_propass.u_hques.value=="--Select--")
			{
			alert('Please Choose a Hint Question');
			return false;	
			}
			
			if(document.u_propass.u_hans.value=="")
			{
				alert('Please Provide an Answer');
				return false;
			}
				
		
		return true;
			
			
	}
	
	function restrict(){
		
		alert('Please Set a New Profile Password.');
		return true;
		
		
	}
	
	function checkpass(){ 
		if(document.u_propass.u_prop.value!=document.u_propass.u_cprop.value)
		{
			alert('Your Profile Password Doesnot Match');
			return false;
		}
		
		return true;	
	}
	

</script>
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

span{
	color:red;	
}
</style></head>

<body>

<div class="container">
  <div class="header"><a href="#" onClick="return restrict();"><img src="../Images/logo 1.jpg" alt="LOGO" name="logo" width="10%" height="90px" id="logo" style="background-color: #8090AB; display:block;float:left;" /></a> 
    <div class="subheader"><h1 style="text-align:center; text-decoration:underline; margin-top:10px; float:right;">Indian National Bank</h1>
    <h4 style="color:blue; position:relative; left:650px; top:70px">Welcome:&nbsp;&nbsp;<?php echo $_SESSION['user']['Name'] ?></h4>
    </div>
    </div>
  <div class="content">
           <div class="box">
                <input type="button" name="Ab" value="Add Beneficiary" onClick="return restrict();" style="margin-left:3px;">
                   <input type="button" name="Profile" value="Profile" onClick="return restrict();" style="margin-left:3px;">
                <input type="button" name="logout" value="Logout" onClick="window.location.href='../Loginpage/logout.php'" style="float:right; margin-right:10px;">
           </div>
           <div class="box" style="background-color:grey;">
                <input type="button" name="Find_transaction" value="Find Transaction" onClick="return restrict();"  style="margin-left:3px;">
                <input type="button" name="Payment" value="Payment/Transfers" style="margin-left:10px;" onClick="return restrict();">
                
               
           </div>
           <div class="box" style="background-color:white">
                <h4 style="color:blue; float:left">You are here:</h4>
           </div>
           
           <div class="box1">
              <h4 style="color:blue">Jump To:</h4>
              <a href="#" onClick="return restrict();">Account Summary</a>
                  
           
           </div>
           <div class="box2">
           <h4 style="float:left; color:blue; margin-top:3px;">Profile Password</h4>
              <div class="box3">
              <form method="post" action="profile_pass_code.php" onSubmit="return check();" name="u_propass">
              <table cellpadding="2px">
              
              	<tr>
                	<td><p>Enter the Profile Password.<span>*</span></p></td>
                    <td><input type="password" name="txt_propass" id="u_prop" /></td>
                    <td><p style="font-size:12px;"><span>(CARE: </span>Password is Case Sensitive.)</p></td>
                    
                </tr>
                <tr>
                	<td><p>Confirm Profile Password.<span>*</span></p></td>
                    <td><input type="password" name="txt_cpropass" id="u_cprop" onChange="return checkpass();" /></td>
                </tr>
                <tr>
                	<td><p>Hint Question<span>*</span></p></td>
                    <td>
                    <select name="h_ques" id="u_hques" >
                    	<option selected disabled>--Select--</option>
                        <option value="What is the website that you rarely visit?">What is the website that you rarely visit?</option>
                        <option value="What adventurous sport your father like?">What adventurous sport your father like?</option>
                        <option value="What is the book your children like?">What is the book your children like?</option>
                        <option value="Which company share you bought first?">Which company share you bought first?</option>
                         <option value="Who is your favourite columnist?">Who is your favourite columnist?</option>
                          <option value="Which company would you like to work in future?">Which company would you like to work in future?</option>
                           <option value="What plant you like or dislike?">What plant you like or dislike?</option>
                            <option value="Registration No of your first Vehicle?">Registration No of your first Vehicle?</option>
                             <option value="What is your neighbours pet's name?">What is your neighbours pet's name?</option>
                    </select>
                    	
                    </td>
                </tr>
                <tr>
                	<td><p>Hint Answer.<span>*</span></p></td>
                    <td><input type="Textbox" name="txt_hans" id="u_hans"  /></td>
                </tr>
                <tr>
                
                	<td><input type="submit" name="btn_sub" onClick="return chekpass();" style="margin-left:250px; width:6em; height:2em; color:white; background:#29458F; border-radius:5px; font-size:16px;" /></td>
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