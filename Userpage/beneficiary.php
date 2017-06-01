 <?php
		include("../connection.php");
		include("../Loginpage/security.php");


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Beneficiary</title>
<link rel="stylesheet" type="text/css" href="../chf.css" />
<link rel="stylesheet" type="text/css" href="../box.css" />

<script type="text/javascript" language="javascript">
	function check()
	{
		if(document.add_ben.b_name.value=="")
		{
			alert('Please Enter Beneficiary Name');
			return false;
		}
		var name=/^[a-zA-Z" "]{1,}$/;
		if(!document.add_ben.b_name.value.match(name)){
			alert('Enter valid Name');
			return false;	
		}
		if(document.add_ben.acc_no.value=="")
		{
			alert('Please Enter Beneficiary Account Number');
			return false;
		}
		var accno=/^\d{10}$/;
		if(!document.add_ben.acc_no.value.match(accno)){
			alert('Enter valid Account Number i.e 10 Digit.');
			return false;	
		}
		if(document.add_ben.cacc_no.value=="")
		{
			alert('Please Confirm Beneficiary Account Number');
			return false;
		}
		var caccno=/^\d{10}$/;
		if(!document.add_ben.cacc_no.value.match(caccno)){
			alert('Enter valid Account Number i.e 10 Digit.');
			return false;	
		}
		if(document.add_ben.t_amt.value=="")
		{
			alert('Please Enter Beneficiary Total Amount');
			return false;
		}
		if(document.add_ben.t_amt.value>100000)
		{
			alert('Beneficiary Amount must be less than 1 Lakh INR');
			document.add_ben.t_amt.focus();
			return false;
		}
		return true;
	}
	
	function checkOnChange()
	{
		if(document.add_ben.acc_no.value!=document.add_ben.cacc_no.value)
		{
			alert('Account Numbers Do Not Match');
			return false;
		}
		return true;	
	}
	
	function funclear()
	{
		
			document.getElementById("add_bn").reset();
	}
</script>

<style type="text/css">

.box2 div{
	font-size:14px;
}
.font-style{
	background-color:#CCC; 
	color:#36C;
}

#spacing{
	margin:10px; 
	padding:2px;
}
input:focus{
	 border:3px solid #29458F;
	 
	 
 }
 input{
	 border-radius:5px;
 }
.red{
	color:red;
	font-size:12px;
	font-weight:bold;	
}

#spacing form table tr td input{
	width:250px;
	height:25px;
	
}

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
</style></head>

<body>
 <?php
							$u_acc_no=$_GET['Accno'];
							$msg=$_GET['msg'];
					if($msg!="")
{
	
 ?>
 
 <script>alert('<?php echo $u; ?>');</script>
 <?php
}
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
            
              <a href="../Userpage/user_hp.php?msg=">Account Summary</a>
                  
           
           </div>
           <div class="box2">
           <h4 style="float:left; color:blue; margin-top:3px; margin-left:5px;">Add a New Beneficiary</h4>
              <div class="box3" style=" height: 350px; overflow-y:scroll;">
            		<div>
                    	<p><i>Mandatory fields are marked with asterisk</i>(<span class="red">*</span>)<p>
                    </div>
                    <div class="font-style" id="spacing">
                    	<p>Ensure that you enter the correct account number.<br/>Bank does not accept responsibility for funds transferred inadvertently to a wrong account number input by the customer.</p>
                    </div>
                    
                   
                    <div id="spacing">
                    	<form method="post" action="beneficiary_code.php" id="add_bn" name="add_ben" onSubmit="return check();">
                    	<table cellpadding="5">
                        	<tr>
                            	<td>Name<span class="red">*</span> &nbsp;</td>
                                <td><input type="text" name="txt_name" id="b_name" onClick="return checkOnChange()" /></td>
                            </tr>
                            <tr>
                            	<td>Account Number<span class="red">*</span> &nbsp;</td>
                                <td><input type="text" name="txt_acc_no" id="acc_no" /></td>
                            </tr>
                                <tr>
                            	<td>Confirm Account Number<span class="red">*</span> &nbsp;</td>
                                <td><input type="text" name="txt_cacc_no" id="cacc_no" onChange="return checkOnChange()" /></td>
                            </tr>
                        	<tr>
                            	<td>Transfer Amount<span class="red">*</span>&nbsp;(INR)&nbsp;</td>
                                <td><input type="number" name="txt_inr" id="t_amt" onClick="return checkOnChange()" /></td>
                                <td><p style="font-size:12px;">(Maximum Amount: Rs.1,00,000)<p></td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="font-style" id="spacing">
                    	<p>SMS Alert for the new Beneficiary will be sent to your mobile number</p>
                    </div>
                    <div id="spacing">
                    <p>Please note, as per RBI instructions credit will be based solely on the beneficiary account number information and the beneficiary name particulars will not be used therfor</p>
                    </div>
                    
                    <div class="font-style" id="spacing">
                    	<p>You can add and approve a new beneficiary within the same session. A new beneficiary, if approved by you during the from 6:00 AM to 8:00 PM (IST), will be activated on the same day witihin 4 hours. Beneficiary approved beyond this period will be activated on the next day after 8:00 AM (IST). <br/>
                      However, if you wish to activate the beneficiary instantly with full limit, please use the IRATA or branch option, if you wish to activate the beneficiary instantly with full limit, please use the IRATA or branch option, which will be displayed on the appropriate page.</p>  
                    </div>
                    <div id="spacing">
                    	<!--<p style="color:red;">CARE: Only one beneficiary can be added in a day. Please do not add more than one beneficiary in a day, If you to add more than one beneficiary, use the IRATA or branch option for activiation.</p>-->
                    </div>
                    	<input type="hidden" name="user_acc_no" value="<?php echo $u_acc_no; ?>";
                    <div style="width:100%; margin-left:300px;">
                    	<input type="submit" name="btn_submit" style="width:7em; background:#29458F; border-radius:5px; color:white; height:2em;" onClick="return checkOnChange()"/>
                        <input type="button" name="btn_reset" value="Reset" onClick="funclear()" style="width:7em; background:#29458F; color:white; height:2em; border-radius:5px;"/>
                    </div>
                    </form>
              </div>
          
        <!-- end .content --></div>
   <div class="footer">
    <p>&copy;2016 Online Banking</p>
    <p style="float:right;">Site best viewed at 1024 x 768 resolution in I.E 7 or above, Mozilla 3.5 or above, Google Chrome 3 or above, Safari 5.0 +</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>