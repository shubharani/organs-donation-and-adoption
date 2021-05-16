<?php 

mysql_connect("localhost","root","");
mysql_select_db("dbproc");
if(isset($_GET['edit']))
{
	$id=$_GET['edit'];
	$res=mysql_query("SELECT * FROM hs");
	$row=mysql_fetch_array($res);
}
if(isset($_POST['HospitalName']))
{
	$HospitalName = $_POST['HospitalName'];
        $DoctorName = $_POST['DoctorName'];
        $Loginid = $_POST['Loginid'];
        $Password = $_POST['Password'];
        
        $Address= $_POST['Address'];
        $MobileNumber = $_POST['MobileNumber'];
	
	$RequiredBloodGroup = $_POST['RequiredBloodGroup'];
       
        $RegisteredDate = $_POST['RegisteredDate'];
        $sql="UPDATE hs SET HospitalName='$HospitalName',DoctorName='$DoctorName',Loginid='$Loginid',Password='$Password',Address='$Address',MobileNumber='$MobileNumber',RegisteredDate='$RegisteredDate' where Loginid='$Loginid'";
        $res=mysql_query(($sql)) or die("could not update".mysql_error());
        echo "<meta http_equiv='refresh' content='0;url=hs1.php'>"; 

        if($sql)
    {
      echo "<script>alert('Successfully Updated!')</script>";
      echo "<script>window.location.href='hs1.php'</script>";
                }
             else
    {
            echo "<script>alert('An error occured while uploading the entry to database. Please try again later.');</script>";
                }
    }
        
   ?>
   
			