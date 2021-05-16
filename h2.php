<?php

	$Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $loginid = $_POST['loginid'];
        $password = $_POST['password'];
        $Age = $_POST['Age'];
       
        $DateOfBirth = $_POST['DOB'];
        $Gender = $_POST['Gender'];
        $Address= $_POST['Address'];
        $MobileNumber1 = $_POST['Mobilenumber1'];
	$MobileNumber2 = $_POST['Mobilenumber2'];
	$BloodGroup = $_POST['Bloodgroup'];
        $Disease = $_POST['Disease'];
        
        
        $RegisteredDate = $_POST['RSD'];
        
mysql_connect("localhost","root","");
mysql_select_db("dbproc");
	
  
	$res=mysql_query("SELECT loginid, password FROM register WHERE loginid='$loginid'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
if (preg_match("$([0-9]{4})-([0-9]{2})-([0-9]{2})$",$DateOfBirth))
{
 if (preg_match("$([0-9]{4})-([0-9]{2})-([0-9]{2})$",$RegisteredDate))
{

	if($count == 1 && $row['password']==$password)
	{
		$_SESSION['loginid'] = $row['loginid'];
               $sql = "SELECT COUNT(*) FROM hdi WHERE loginid LIKE '$loginid'";
	
	
	$query = mysql_query($sql);

	$row = mysql_fetch_row($query);
	
	// Here we have the total row count
	$rows = $row[0];

	if($rows == 0)
	{	

		
          $insertSQL = "INSERT INTO hdi VALUES('$Firstname','$Lastname','$loginid','$Age','$DateOfBirth','$Gender','$Address','$MobileNumber1','$MobileNumber2','$BloodGroup','$Disease','$RegisteredDate')";
			
		mysql_query($insertSQL);
		
		if($insertSQL)
		{
			echo "<script>alert('Successfully Added!')</script>";
			echo "<script>window.location.href='hd1.php'</script>";
                }
             else
		{
            echo "<script>alert('An error occured while uploading the entry to database. Please try again later.');</script>";
                }
	}
      
           else
	{
		echo "<script>alert('you are already registered using this loginid!');</script>";
		
   		echo "<script>window.location.href='h2.html'</script>";
	}
	
	
            }
        else
	{
		
        echo "<script>alert('Username / Password Seems Wrong !');</script>";
        echo "<script>window.location.href='h2.html';</script>";
        
	}
  }
    
  
    else
   {
     echo "<script>alert('The RegisteredDate format is: YYYY-MM-DD !');</script>";
    echo "<script>window.location.href='h2.html';</script>";
    }
 }
    else
   {
     echo "<script>alert('The RegisteredDate and Dateofbirth format is: YYYY-MM-DD !');</script>";
    echo "<script>window.location.href='h2.html';</script>";
    }
	// Close your database connection
	mysql_close();


?>