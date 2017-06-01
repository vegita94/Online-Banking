
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PAN details page</title>
<link rel="stylesheet" type="text/css" href="../chf.css">
<script type="text/javascript" language="javascript">
	function pancheck(){
		if(document.panregister.txt_acctype.value=="--Select--")
		{
			alert('Please Choose your Account type');
			return false;	
			
		}
		
	/*	if(document.panregister.txt_acctype1.value=="--Select--")
		{
			alert('Please Choose your Account type');
			return false;	
			
		}
		
		if(document.panregister.txt_acctype.value==document.panregister.txt_acc_type1.value)
		{
			alert('Please choose different Account type');
			return false;	
		}*/
		
		if(document.panregister.txt_accno.value=="")
		{
			alert('Please Enter your Account Number');
			return false;	
			
		}
		var acc_no1=/^\d{10}$/;
		if(!document.panregister.txt_accno.value.match(acc_no1))
		{
			alert('Please Enter a Valid Account Number(MUST BE 10 DIGITS)');	
			return false;
			
		}
		
		/*if(document.panregister.txt_accno1.value=="")
		{
			alert('Please Enter your Account Number');
			return false;	
			
		}
		var acc_no2=/^\d{10}$/;
		if(!document.panregister.txt_accno1.value.match(acc_no2))
		{
			alert('Please Enter a Valid Account Number(MUST BE 10 DIGITS)');	
			return false;
			
		}*/
		
		
		
		
		
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
		
	/*	if(document.panregister.txt_cif1.value=="")
		{
			alert('Please Enter your CIF Number');
			return false;	
			
		}
		
		var acc_cif1=/^\d{10}$/;
		if(!document.panregister.txt_cif1.value.match(acc_cif1))
		{
			alert('Please Enter a Valid CIF Number(MUST BE 10 DIGITS)');	
			return false;
			
		}*/
		
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
		
	/*	if(document.panregister.txt_brcode1.value=="")
		{
			alert('Please Enter your Branchcode');
			return false;	
			
		}
		
		var acc_brcode1=/^\d{5}$/;
		if(!document.panregister.txt_brcode1.value.match(acc_brcode1))
		{
			alert('Please Enter a Valid Branch Code(MUST BE 5 DIGITS)');	
			return false;
			
		}*/
		
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
	span{
		color:red;	
		
	}
	input:focus{
	 border:3px solid #29458F;
	 
	 
 }
 select:focus{
	 border:3px solid #29458F;
 }
</style>
</head>

<body>

<div class="container">
  <div class="header"><a href="../Homepage/homepage.php"><img src="../Images/logo 1.jpg" alt="LOGO" name="logo" width="10%" height="90px" id="logo" style="background-color: #8090AB; display:block; float:left;" /></a>
  <div class="subheader"><h1 style="text-align:center; text-decoration:underline; margin-top:10px; float:right;">Indian National Bank</h1></div> 
    <!-- end .header --></div>
    
  <div style="border-top:1px solid blue;float:left; display:block; width:99.8%;">
  	    <aside class="t1" style=" float:left; display:block; margin-left:50px;">
        	<ul>
            	<li><span>Fill all star fields</span></li>
                <li><span>Choose an account type</span></li>
                <li><span>Enter all fields carefully<br/>(Details Given in Your Passbook.)</span></li>
            </ul>
        </aside>
  		<table class="t1" style="margin-left:100px;">
        	<form method="post" name="panregister" onSubmit="return pancheck();" action="pan_details_code.php">
            	<tr>	
                    <td>Account Type<div class="red">*</div>&nbsp;</td><td><select name="txtacc_type"   id="txt_acctype" style="width:15em;"><option disabled selected>--Select--</option>
                    <option value="Savings">Savings Account</option>
                    <option value="current">Current Account</option></select></td>
                   <!-- <td><p>Select an Account Type</p></td> 
                    <td>
                    	<select name="txtacc_type1" id="txt_acctype1"   style="width:15em;"><option disabled selected>--Select--</option>
                    <option value="Sav">Savings Account</option>
                    <option value="cur">Current Account</option></select>
                    </td> -->
                </tr>
                <tr>
                	<td>Account Number<div class="red">*</div>&nbsp;</td><td><input type="textbox" name="txtacc_no" id="txt_accno" /></td>
                <!--	<td><p>Enter Account Number</p></td>  
                    <td><input type="textbox" name="txtacc_no1" id="txt_accno1" /></td> -->
                </tr>
                <tr>
                    <td>CIF Number<div class="red">*</div>&nbsp;</td><td><input type="textbox" name="txtcif" id="txt_cif" /></td>
                <!--	<td><p>Enter CIF Number</p></td> 
                    <td><input type="textbox" name="txtcif1" id="txt_cif1" /></td> -->
                </tr>
                <tr>
                    <td>Branch Code<div class="red">*</div>&nbsp;</td><td><input type="number" name="txtbrcode" id="txt_brcode" /></td>
              <!--  	<td><p>Enter Branch Code</p></td>  
                    <td><input type="number" name="txtbrcode1" id="txt_brcode1" /></td> -->
                </tr>
                <tr>
                    <td>PAN Number<div class="red">*</div>&nbsp;</td><td><input type="textbox" name="txtpan_no" id="txt_pan_no" /></td>
                	<td><p>Enter PAN Number</p></td>
                </tr>
                <tr>    
                    <td colspan="2" align="center"><input type="submit" name="txt_acc_submit" style="width:10em; height:3em; color:white; background:#29458F; font-size:medium;" /></td>
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