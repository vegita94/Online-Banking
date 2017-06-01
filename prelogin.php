<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pre-login page</title>
<link type="text/css" rel="stylesheet" href="chf.css"/>

<style type="text/css">
.container1{
	
	background:url("Images/Personal%201.jpg");
	
}

body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: linear-gradient(to right, white , powderblue);
	margin: 0;
	padding: 0;
	color: #000;
}


ul, ol, dl { 
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 
	padding-right: 15px;
	padding-left: 15px; 
}
a img { 
	border: none;
}


a:link {
	color:#414958;
	text-decoration: underline; 
}
a:visited {
	color: #4E5869;
	text-decoration: underline;
}
a:hover, a:active, a:focus { 
	text-decoration: none;
}

.header .subheader{
	float:left;
	display:block;
	width:80%;
	height:90px;
}
.container {
	width: 80%;
	max-width: 1260px;
	min-width: 780px;
	background-color: #FFF;
	margin: 0 auto; 
	overflow:hidden;
	box-shadow:10px 10px 10px #BEBEBE;
}


.header {
	background-color: #6F7D94;
}

.content {
	padding: 10px 0;
	float:left;
	width:100%;
	display:block;
	border-top:2px solid blue;;
}

.content ul, .content ol { 
	padding: 0 15px 15px 40px; 
}


.footer {
	padding: 10px 0;
	width:100%;
	background-color: #376A95;
	float:left;
	display:block;
	
	font-size:12px;
	color:white;
	
}

.fltrt {  
	float: right;
	margin-left: 8px;
}
.fltlft { 
	float: left;
	margin-right: 8px;
}
.clearfloat { 
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
#Lgn {
	margin-top:50px;
	margin-bottom:50px;
	margin-left:800px;
	font-size:medium;
	border-radius:5px;
	width:15em;
	height:3em;
	background:#29458F;
	color:white;
}
.con{
	/*border:1px solid blue; */
	float:left; 
	display:block; 
	width:100%; 
	height:150px;
	
}

.con1 {
	/*border:1px solid blue; */
	float:left; 
	display:block; 
	width:100%; 
	height:300px;
	
}

.box1{
	
	
	border:1px solid black; 
	float:left; 
	display:block; 
	width:20%; 
	height:125px; 
	margin-left:40px; 
	margin-top:10px; 
	margin-bottom:4px;
}

.box2 {
	border:1px solid black; 
	float:left; 
	display:block; 
	width:45%; 
	height:250px; 
	margin-left:40px; 
	margin-top:6px; 
	margin-bottom:6px;
	
}
.head1 h2{
	background-color:grey; 
	width:80%; 
	text-align:center;
	
}
.box1 p {
     font-size:12px; 
     text-align:center;	
    }
	
.box2 ul {
	 text-align:left;
	 
}

.box2 li{
       font-size:13px;	
	
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
  <div class="header"><a href="Homepage/homepage.php"><img src="Images/logo 1.jpg" alt="LOGO" name="logo" width="10%" height="90px" id="logo" style="background-color: #8090AB; display:block;float:left;" /></a> 
    <div class="subheader"><h1 style="text-align:center; text-decoration:underline; margin-top:10px; float:right;">Indian National Bank</h1>
    </div>
  <div class="content">
 
        <div class="container1" style="border:3px solid black; float:left; display:block; width:100%;">
            <form action="loginpage/Login.php">  
            <input type="hidden" name="msg" value="" />
            <input id="Lgn" type="submit" name="login" value="Proceed To login" />
            </form>
            <div> </div> 
        </div>
       
        <div class="con">
              <div class="box1">
                    <div class="head1">
                         <h2 style="float:right; color:green; ">ALWAYS</h2>
                   </div>
                         <p>keep your computer free of malware.</p>
              </div>
              <div class="box1">
                    <div class="head1">
                            <h2 style="float:right; color:green;">ALWAYS</h2>
                    </div>
                            <p>change your passwords periodically.</p>
               </div>
              <div class="box1">
                    <div class="head1">
                        <h2 style="float:right; color:red;">NEVER</h2>
                    </div>
                        <p>respond to any communication seeking your passwords.</p>
              </div>
              <div class="box1">
                    <div class="head1">
                          <h2 style="float:right; color:red;">NEVER</h2>
                    </div>
                          <p>reveal your password or card details to anyone.</p>
              </div>
        </div>
        <div class="con1">
             <h1 style=" font-size:14px; text-align:center; color:blue; margin-top:4px;">FOR YOUR OWN SECURITY</h1>
             <div class="box2">
      <h2 style="float:left; background-color:grey; font-size:14px;">Please ensure the following before logging into Online  </h2>
                 <aside style="float:left;">
                 <ul>
                       <li>The URL in your address bar begins with "https".</li>
                       <li>The address or status bar displays the padlock symbol.</li>
                       <li>Click the padlock to view and verify the security certificate.</li>
                       <li>The address bar turns green indicating that the site is secured with an SSL certificate that meets the Extended Validation Standard.</li>
                       <li>(SSL is compatible for IE 7.0 and above, Mozilla Firefox 3.1 and above, Opera 9.5 and above, Safari 3.5 and above, Google Chrome)</li>
                 </ul>
                 </aside>
             </div>
             <div class="box2">
             <h2 style="float:left; background-color:grey; font-size:14px;">Beware of Phishing attacks</h2>
             <aside style="float:left;">
             <ul>
                       <li>Phishing is a fradulent attempt usually made through email,phone calls,SMS etc seeking your personal and confidential information. </li>
                       <li>Bank or any of its representatives never send you email/SMS or calls you over phone to get your personal information or password or one time SMS(high security) password. Any such email/SMS or phone call is an attempt to fradulently withdraw money from your account through Internet Banking. Never respond to such email/SMS or phone call. Please report immediately on a@g.com if you recieve any such email/SMS or phone call. Please lock your user access immediately if you have accidentally revealed your credentials. Click here to lock</li>
                 </ul>
                 </aside>
             </div>
        </div>      
   </div>
  <div class="footer">
    <p>&copy;2016 Online Banking</p>
    <p style="float:right;">Site best viewed at 1024 x 768 resolution in I.E 7 or above, Mozilla 3.5 or above, Google Chrome 3 or above, Safari 5.0 +</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>