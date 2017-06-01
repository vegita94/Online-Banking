<?php
	session_start();
	include("../Loginpage/security.php");
	
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add an Account</title>
<link rel="stylesheet" type="text/css" href="../chf.css">
<script type="text/javascript" language="javascript">
	function check(){
		if(document.panregister.txt_acc_type.value=="--Select--")
		{
			alert('Please Choose your Account type');
			return false;	
			
		}
		
		if(document.panregister.txt_accno.value=="")
		{
			alert('Please Enter your Account Number');
			return false;	
			
		}
		
		var acc_no=/^\d{10}$/;
		if(!document.panregister.txt_accno.value.match(acc_no))
		{
			alert('Please Enter a Valid Account Number(MUST BE 10 DIGITS)');	
			return false;
			
		}
		
		
		
		if(document.panregister.txt_cif.value=="")
		{
			alert('Please Enter your CIF Number');
			return false;	
			
		}
		var acc_cif=/^\d{10}$/;
		if(!document.panregister.txt_cif.value.match(acc_cif))
		{
			alert('Please Enter a Valid CIF Number(MUST BE 10 DIGITS)');	
			return false;
			
		}
		if(document.panregister.txt_brcode.value=="")
		{
			alert('Please Enter your Branchcode');
			return false;	
			
		}
		
		var acc_brcode=/^\d{5}$/;
		if(!document.panregister.txt_brcode.value.match(acc_brcode))
		{
			alert('Please Enter a Valid Branch Code(MUST BE 5 DIGITS)');	
			return false;
			
		}
		if(document.panregister.txt_pan_no.value=="")
		{
			alert('Please Enter your PAN Number');
			return false;	
			
		}		
		
		var acc_panno=/^[A-Z0-9]{10}$/;
		if(!document.panregister.txt_pan_no.value.match(acc_panno))
		{
			alert('Please Enter a Valid PAN Number(MUST BE 10 DIGITS,A-Z)');	
			return false;
			
		}
		
		return true;	
	}
</script>
<style>
	.t1{
    	float:left;
		display:block;
		/*border:2px solid black;*/
    }
	.red{
		color:red; 
		display:inline;
		font-size:12px;
		font-weight:bold;
	}
	input, select{
		box-shadow:2px 2px 10px #CCC;
		height:2em;
		border-radius:5px;
		padding-left:5px;
		padding-right:5px;
	}
	.t1 p{
		margin:10px;
		color:#900;	
		visibility:hidden;
	}
	input{
			width:14em;;
	}
</style>
</head>

<body>

<div class="container">
  <div class="header"><a href="../Userpage/user_hp.php?msg="><img src="../Images/logo 1.jpg" alt="LOGO" name="logo" width="10%" height="90px" id="logo" style="background-color: #8090AB; display:block; float:left;" /></a>
  <div class="subheader"><h1 style="text-align:center; text-decoration:underline; margin-top:10px; float:right;">Indian National Bank</h1></div> 
    <!-- end .header --></div>
    
  <div style="border-top:1px solid blue;float:left; display:block; width:99.5%;">
  	    <aside class="t1" style=" float:left; display:block; margin-left:50px;">
        	<ul>
            	<li>Fill all star feilds</li>
                <li>Choose an account type</li>
                <li>Enter all feilds carefully</li>
            </ul>
        </aside>
  		<table class="t1" style="margin-left:100px;">
        	<form method="post" name="panregister" onSubmit="return check();" action="add_acc_code.php">
            	<tr>	
                    <td>Account Type<div class="red">*</div>&nbsp;</td><td><select name="txt_acc_type" style="width:15em;"><option disabled selected>--Select--</option>
                    <option value="Savings">Savings Account</option>
                    <option value="current">Current Account</option></select></td>
                    <td><p>Select an Account Type</p></td 
                ></tr>
                <tr>
                	<td>Account Number<div class="red">*</div>&nbsp;</td><td><input type="number" name="txt_acc_no" id="txt_accno" /></td>
                	<td><p>Enter Account Number</p></td>
                </tr>
                <tr>
                    <td>CIF Number<div class="red">*</div>&nbsp;</td><td><input type="number" name="txt_cif" id="txt_cif" /></td>
                	<td><p>Enter CIF Number</p></td>
                </tr>
                <tr>
              <!--      <td>Branch Code<div class="red">*</div>&nbsp;</td><td><input type="number" name="txt_brcode" id="txt_brcode" /></td>
                	<td><p>Enter Branch Code</p></td>
                </tr>
                <tr>
                    <td>PAN Number<div class="red">*</div>&nbsp;</td><td><input type="textbox" name="txt_pan_no" id="txt_pan_no" /></td>
                	<td><p>Enter PAN Number</p></td>
                </tr>-->
                <tr>    
                    <td colspan="2" align="center"><input type="submit" name="txt_btn" style="width:5em;" /></td>
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