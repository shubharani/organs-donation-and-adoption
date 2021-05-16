<?php

	$name = $_POST['Name'];
        
	$email = $_POST['Email'];
	$comments = $_POST['Comments'];
        $contactnumber = $_POST['ContactNumber'];

mysql_connect("localhost","root","");
mysql_select_db("dbproc");
	
	$insertSQL = "INSERT INTO fb VALUES('$name','$email','$comments','$contactnumber')";
			
		mysql_query($insertSQL);
		
		if($insertSQL)
		{
		echo "<script>alert('Successfully Added!')</script>";
			echo "<script>window.location.href='fb.html'</script>";
                }
           else
		{
            echo "<script>alert('An error occured while uploading the entry to database. Please try again later.');</script>";
               }
	
	
	// Close your database connection
	mysql_close($db_conx);


?>
