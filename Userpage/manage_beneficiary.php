<?php
		include("../connection.php");
		include("../Loginpage/security.php");


?>
<script type="text/javascript"> 
function check(){
     var radios = document.getElementsByName("Accno");

     for (var i = 0, len = radios.length; i < len; i++) {
          if (radios[i].checked) {
              return true;
          }
     }
     alert("Please select atleast one account no.");
     return false;
 }
</script>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Manage Beneficiary</title>
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
          
           <h4 style="float:left; color:blue; margin-top:3px;">Manage Beneficiary</h4>
              <div class="box3">
              		   <div class="box6">
                                <h4 style=" color:#03C; float:left">Select an account</h4>
                            </div>
                            <div class="box6" style=" background-color:#CCC">
                                <h4 style="float:left; color:#666; margin-left:50px;">Account No.</h4>
                                <h4 style="float:left; color:#666; margin-left:250px;">Available Balance</h4>
                                
                                
                            </div>
                            <?php 
							 $sql="select count(*) from pan_details where User_name='{$_SESSION['pan']['User_name']}'";
							 $rs=mysql_query($sql); 
							 if(mysql_num_rows($rs))
							     {
									 $row=mysql_fetch_array($rs);
									//echo $row['count(*)'];
									 
								 }
							$count1=$row['count(*)'];
						 for($x=0;$x<$count1;$x++)
                            {	 
						$sql1="select Acc_no,Acc_type,Bal from pan_details where User_name='{$_SESSION['pan']['User_name']}' ORDER BY Acc_no LIMIT $x,$count1";
						$rs1=mysql_query($sql1);
						if(mysql_num_rows($rs1))
						{
							$row1=mysql_fetch_array($rs1);
							
                           
								?>	
                                <form  method="get" action="beneficiary.php" onSubmit="return check();">
								<table  width="100%">
                                     <tr>
                                        <td><p style="margin-left:50px;">  <input type="radio" name="Accno" value="<?php echo $row1['0']; ?>" /><?php echo $row1['0']; ?> </p></td>
                                        <td><p style="margin-left:150px;"><?php echo $row1['2']; ?></p></td>
                                        
                                        
                                        
                                        <input type="hidden"  name="msg" value="" />
                                        
                                       
                                      
                                       </tr>
                            </table>
                            
                              <?php
                            } 
                          
						}
							
								 
							?>
                          
                             <!-- <a  style="float:left; margin-top:20px; margin-left:25px;"href="Beneficiary.php"?>Add new Beneficiary</a>-->
                           <p style="float:right;"> <input type="submit"  style="color:#448EA4; margin-top:10px; font-size:16px; text-decoration:underline; background:white;" value="Click here for Add new beneficiary" />  </p>
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