<?php
mysql_connect("localhost","root","");
mysql_select_db("dbproc");
	
        $email = $_POST['loginid'];
	$upass = $_POST['password'];
	
	
	
	$res=mysql_query("SELECT loginid, password FROM register WHERE loginid='$email'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['password']==$upass)
	{
		$_SESSION['loginid'] = $row['loginid'];
		header("Location: home.html");
	}
	else
	{
		
        echo "<script>alert('Username / Password Seems Wrong !');</script>";
        echo "<script>window.location.href='login.html';</script>";
        
	}



mysql_close();
?>