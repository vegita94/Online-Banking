<?php
		include("../connection.php");
		include("../Loginpage/security.php");


?>
<script type="text/javascript"> 
  
function check(){
     var radios = document.getElementsByName("baccno");

     for (var i = 0, len = radios.length; i < len; i++) {
          if (radios[i].checked) {
              return true;
          }
     }
     alert("Please select atleast one account no./Add Beneficiary");
     return false; 
 }
 function check2(){
	 var c=check();
	 if(c==true){
	 var radios = document.getElementsByName("baccno");
   var r=document.getElementById("acn").value;
	
     for (var i = 0, len = radios.length; i < len; i++) {
		 if (radios[i].checked) {
              var y=radios[i].value;
          }
	 }
	 
	window.location.href = 'edit.php?key='+y+'&msg='+r;
	return true; 
	 }
 }
 

 </script>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Beneficiary</title>
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

th,td
{

	border-bottom:1px solid black;
	padding:10px;
}
table th{
	background:#999;
}
table td:hover{
	background: #409AB5
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
           <h4 style="float:left; color:blue; margin-top:3px;">Beneficiaries are Below:</h4>
              <div class="box3">
              
              <?php
			  		 $acc_no=$_GET['Accno'];
					
					$sql="select * from beneficiary_details where Acc_no='$acc_no'";
					$rs= mysql_query($sql);
					
					mysql_num_rows($rs);
					?>
					 <form action="confirm_transfer.php" method="get" name="form_check" onSubmit=" return check();">
                            
                            <?php
							
					
						while($row=mysql_fetch_array($rs))
						{
						
						?>
                        <table style="text-align:center;border-collapse:collapse;"  width="100%">
                        	<tr >
                            	<th></th>
                            	<th><p>Beneficiary Account Number: </p></th>
                                <th><p>Beneficiary Name: </p></th>
                                <th><p>Amount: </p></th>
                                
                            </tr>
                       
                        	<tr>
                            	<td><input type="radio" name="baccno" value="<?php echo $row['2']; ?>" /></td>
                                <td><?php echo $row['2'];  ?></td>
                           
                               	<td><?php echo $row['3'];  ?></td>
                          
                           
                            	<td><?php echo $row['4'];  ?></td>
                          
                        	</tr>
                        
                        </table>
                        <?php
						
						
							
						}
			  ?>
             		<input type="hidden" name="bid" id="acn" value="<?php echo $acc_no; ?>" />
             		<a href="beneficiary.php?Accno=<?php echo $acc_no;?>&msg=">Add Beneficiary</a>
                    <input style="float:right; width:6em; height:2em; margin:10px; background:#29458F; color:white; border-radius:5px;" type="submit" name="btn_submit" value="Continue..." />
                    <input type="button" value="Edit" onClick=" return check2(); " style=" width:6em; height:2em; margin:10px; background:#29458F; color:white; border-radius:5px;" >
                               
            
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