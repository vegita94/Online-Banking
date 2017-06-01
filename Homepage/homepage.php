<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="../chf.css" />
<style type="text/css">

.content {
	display:block;
	float:left;
	width:100%;
	border-top:1px solid blue;
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
td{
	border-bottom:1px solid blue;
		
}

#login:hover {
	background: #DDD;
}
#register:hover {
 color:blue;

}
#help:hover{
 color:blue;	
}
btn_login:hover {
	font-weight:bold;
	background:white;
		
}
	


</style>
</head>

<body>

<div class="container">
  <div class="header"><a href="../Homepage/homepage.php"><img src="../Images/logo 1.jpg" alt="LOGO" name="logo" width="10%" height="90px" id="logo" style="background-color: #CCCCFF; display: block;" /></a> 
  <div class="subheader"><h1 style="text-align:center; text-decoration:underline; margin-top:10px; float:right;">Indian National Bank</h1></div>
  <!-- end .header --></div>
  <div class="content">
  	<table style="border:1px solid blue;margin:auto;width:65%;  border-radius:10px; margin-top:15px; margin-bottom:15px;">
    	<tr>
        	<td colspan="2" style="text-align:center;"><p style="margin-bottom:10px; margin-top:10px; font-weight:bold;">PERSONAL BANKING</p></td> 
        </tr>
        <tr>
        	<td id="login" colspan="2">
            <form action="../prelogin.php">
            <input type="hidden" name="msg" value="" />
            <input id="btn" type="submit" name="btn_login" value="Login" style="background:#29458F; font-size:16px; color:white; border-radius:5px;height:3em;width:7em; margin-top:20px; margin-left:45%; margin-bottom:20px; " />
            </form>
            </td>
        </tr>
        <tr>
        	<td style="width:55%;"><a id="register" href="../Register/user_register.php?msg=" style="margin-left:250px; font-weight:lighter; font-style:italic;">NEW USER REGISTRATION</a></td>
           <!-- <td><a id="help" href="#" style="font-weight:lighter; font-style:italic; margin-left:20px;">HELP</a></td>-->
        </tr>
    </table>
  </div>
    
  
  <div class="info">
  	<p><?php  include("slider.html");?></p>
  </div> 
  <div class="footer">
    <p>&copy;2016 Online Banking</p>
    <p style="float:right;">Site best viewed at 1024 x 768 resolution in I.E 7 or above, Mozilla 3.5 or above, Google Chrome 3 or above, Safari 5.0 +</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>