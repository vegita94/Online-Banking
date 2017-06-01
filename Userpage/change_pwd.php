<?php
		include("../connection.php");
		include("../Loginpage/security.php");


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="../chf.css" />
<link rel="stylesheet" type="text/css" href="../box.css" />


<script type="text/javascript" language="javascript">
	
	function check()
	{
		if(document.getElementById("cpwd").value=="")
		{
		alert("Please enter your current password")
		return false;	
		}
		if(document.getElementById("ques1").value=="--Select--")
		{
		alert("Please select the first question")
		return false;	
		}
	    if(document.getElementById("ans1").value=="")
		{
		alert("Please enter the first answer")
		return false;	
		}
		if(document.getElementById("ans2").value=="")
		{
		alert("Please enter the second answer")
		return false;	
		}
		return true;
		
	}
	
	/*function ch_pwd_check()
	{
		if(document.getElementById("npwd").value!=document.getElementById("cnpwd").value)
		{
			alert("Passwords don't match. Please Re-Enter");
			document.getElementById("npwd").value="";
			document.getElementById("cnpwd").value="";
			return false;
		}
		return true;
	}*/
</script>

<style type="text/css">

.table_style{
	display:block; 
	float:left;
	width:45%;
}

.table_style td{
	padding:15px 15px 15px 0px;
	text-align:left;
}

.box3 div{
	margin:10px;
	padding:5px;
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
input{
	border-radius:5px;
	height:2em;	
}
</style></head>

<body onLoad="disable();">
<?php  $u=$_GET['msg'];
if($u!="")
{
	
 ?>
 
 <script>alert('<?php echo $u; ?>');</script>
 <?php
}
?>

<div class="container"> 
  <div class="header"><a href="../../Userpage/user_hp.php"><img src="../Images/logo 1.jpg" alt="LOGO" name="logo" width="10%" height="90px" id="logo" style="background-color: #8090AB; display:block;float:left;" /></a> 
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
          
              <a href="../../Userpage/user_hp.php?msg=">Account Summary</a>
                  
           
           </div>
           <div class="box2">
           <h4 style="float:left; color:blue; margin-top:3px;">Change Login Password</h4>
              
              <div class="box3" style="height:350px; overflow-y:scroll;">
            	
                
                <div style="margin-top:15px; margin-bottom:15px;">
                <form name="passwd" method="post" action="change_pwd_code.php">
                    <table>
                	<tr>
                    	<td><p>Enter your Current Password:</p></td>
                        <td><input type="password" name="txt_cpwd" id="cpwd" /></td>
                    </tr>
                    </table>
                </div>
                
                <div style="padding:10px 0px 10px 0px; border-top:1px solid black; border-bottom:1px solid black;">
                	<table cellpadding="5">
                    	<tr>
                        	<td><p>Answer a security question 1:</p></td>
                        </tr>
                                         
                    	<tr>
                    		<td><p><select name="txt_sques1" style="width:15em; height:2em;" id="ques1">
                            	<option disabled selected>--Select--</option>
                                <option>What was the first book i ever read?</option>
                                <option>What was the first company i ever worked for?</option>
                                <option>What is my partner's middle name?</option>
                                <option>What is the first name of my oldest cousin?</option>
                        	   </select></p>
                        	</td>
                        	<td><input type="textbox" name="txt_sec_ans1" id="ans1" /></td>
                    	</tr>
                    	<tr>
                        	<td><p>Answer a security question 2:</p></td>
                        </tr>
                                         
                    	<tr>
                    		<td>
                        			<?php 
										$sql="select que2 from user_info where User_name='{$_SESSION['user']['User_name']}' ";
										$rs=mysql_query($sql);
										
										if(mysql_num_rows($rs))
										{
											$row=mysql_fetch_array($rs);
											
									?>
                                    			<select name="txt_sques2" id="ques2" style="margin-left:13px; height:2em; width:15em;">
                            	<option selected><?php echo ($row['0']); ?></option>
                                           </select>     
                                    <?php 
											
										}
									?>
                        	   </select></p>
                        	</td>
                        	<td><input type="textbox" name="txt_sec_ans2" id="ans2" /></td>
                    	</tr>
                    	<tr><!--change type to submit, below also-->
                    		<td><p><input type="submit" name="btn_submit" value="Submit" id="submit_ans" onClick="return check();" style="width:7em; height:2em; color:white; background:#29458F; border-radius:5px; font-size:16px;" /></p></td>
                    	</tr>
                    </table>    
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