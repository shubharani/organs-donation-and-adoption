<?php

	$firstname = $_POST['Firstname'];
        $lastname = $_POST['Lastname'];
        $loginid = $_POST['Loginid'];
        $password = $_POST['pwd'];
        $cnpassword= $_POST['cnpwd'];
	$email = $_POST['Email'];
	$address = $_POST['Address'];
        $contactnumber = $_POST['Contactnumber'];

mysql_connect("localhost","root","");
mysql_select_db("dbproc");
	
$sql = "SELECT COUNT(*) FROM register WHERE loginid LIKE '$loginid' or password LIKE '$password' or email LIKE '$email'";
	
	
	$query = mysql_query($sql);

	$row = mysql_fetch_row($query);
	
	// Here we have the total row count
	$rows = $row[0];

	if($rows == 0)
	{	
		$insertSQL = "INSERT INTO register VALUES('$firstname','$lastname','$loginid','$password','$cnpassword','$email','$address','$contactnumber')";
			
		mysql_query($insertSQL);
		
		if($insertSQL)
		{
		/*	echo "<script>alert('Successfully Added!')</script>";*/
			
			if(!isset($_SESSION['firstname']))
			{
				$_SESSION['firstname'] = $firstname;
			}
			
			else
			{
				$_SESSION['firstname'] = "";
			}
			echo "<script>alert('Successfully Added');</script>";
			echo "<script>alert('You will be redirect to login page');</script>";

			echo "<script>window.location.href='login.html'</script>";
        }
        else
		{
            echo "<script>alert('An error occured while uploading the entry to database. Please try again later.');</script>";
        }
	}
	
	else
	{
		echo "<script>alert('Sorry This loginid or password or email address already exists!');</script>";
		
   		echo "<script>window.location.href='reg.html'</script>";
	}
	
	// Close your database connection
	mysql_close($db_conx);


?>

