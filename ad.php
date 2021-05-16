<?php
mysql_connect("localhost","root","");
mysql_select_db("dbproc");
	
        $email = $_POST['loginid'];
	$upass = $_POST['password'];
	
	
	
	$res=mysql_query("SELECT loginid, password FROM register WHERE loginid='$email' and loginid='1gg16cs406' AND password='1gg16cs406'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['password']==$upass)
	{
		$_SESSION['loginid'] = $row['loginid'];
		header("Location: r.php");
	}
	else
	{
		
        echo "<script>alert('Username / Password Seems Wrong !');</script>";
        echo "<script>window.location.href='ad.html';</script>";
        
	}



mysql_close();
?>