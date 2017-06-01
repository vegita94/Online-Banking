<?php
	
	if($_SESSION['user']==NULL)
	{
		header("location:../prelogin.php?msg=Please LOGIN to continue");
	}
	
?>