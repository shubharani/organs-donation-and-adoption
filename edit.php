<?php 
mysql_connect("localhost","root","");
mysql_select_db("dbproc");
if(isset($_GET['edit']))
{
	$id=$_GET['edit'];
	$res=mysql_query("SELECT * FROM hdi");
	$row=mysql_fetch_array($res);
}
if(isset($_POST['Firstname']))
{

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
        $sql="UPDATE hdi SET Firstname='$Firstname',Lastname='$Lastname',loginid='$loginid',Age='$Age',Gender='$Gender',Address='$Address',MobileNumber1='$MobileNumber1',MobileNumber2='$MobileNumber2',BloodGroup='$BloodGroup',Disease='$Disease'
         where loginid='$loginid'";

        $res=mysql_query(($sql)) or die("could not update".mysql_error());
        echo "<meta http_equiv='refresh' content='0;url=hd1.php'>"; 

        if($sql)
    {
      echo "<script>alert('Successfully Updated!')</script>";
      echo "<script>window.location.href='hd1.php'</script>";
                }
             else
    {
            echo "<script>alert('An error occured while uploading the entry to database. Please try again later.');</script>";
                }
    }
        
   ?>
   