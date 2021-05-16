<?php

	$HospitalName = $_POST['HospitalName'];
        $DoctorName = $_POST['DoctorName'];
        $Loginid = $_POST['Loginid'];
        $Password = $_POST['Password'];
        
        $Address= $_POST['Address'];
        $MobileNumber = $_POST['MobileNumber'];
	
	$RequiredBloodGroup = $_POST['RequiredBloodgroup'];
       
        $RegisteredDate = $_POST['RegisteredDate'];
        
mysql_connect("localhost","root","");
mysql_select_db("dbproc");
	
  
	$res=mysql_query("SELECT loginid, password FROM register WHERE loginid='$Loginid'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row

 if (preg_match("$([0-9]{4})-([0-9]{2})-([0-9]{2})$",$RegisteredDate))
{

	if($count == 1 && $row['password']==$Password)
	{
		$_SESSION['Loginid'] = $row['loginid'];
               $sql = "SELECT COUNT(*) FROM hs WHERE loginid LIKE '$Loginid'";
	
	
	$query = mysql_query($sql);

	$row = mysql_fetch_row($query);
	
	// Here we have the total row count
	$rows = $row[0];

	if($rows == 0)
	{	

		
          $insertSQL = "INSERT INTO hs VALUES('$HospitalName','$DoctorName','$Loginid','$Password','$Address','$MobileNumber','$RequiredBloodGroup','$RegisteredDate')";
			
		mysql_query($insertSQL);
		
		if($insertSQL)
		{
			echo "<script>alert('Successfully Added!')</script>";
			echo "<script>window.location.href='hs1.php'</script>";
                }
             else
		{
            echo "<script>alert('An error occured while uploading the entry to database. Please try again later.');</script>";
                }
	}
      
           else
	{
		echo "<script>alert('you are already registered using this loginid!');</script>";
		
   		echo "<script>window.location.href='hs.html'</script>";
	}
	
	
            }
        else
	{
		
        echo "<script>alert('Username / Password Seems Wrong !');</script>";
        echo "<script>window.location.href='hs.html';</script>";
        
	}
}
  
    
   else
   {
     echo "<script>alert('The RegisteredDate format is: YYYY-MM-DD !');</script>";
    echo "<script>window.location.href='hs.html';</script>";
    }

	// Close your database connection
	mysql_close();


?>