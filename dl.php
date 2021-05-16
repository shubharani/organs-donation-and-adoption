
<?php
$servername="localhost";
$username="vinutha c l";
$password="root";
$dbname="organda";

$conn= new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) { die("connection failed:".$conn->connect_error);
	# code...
}
	
  
	$sql="DELETE FROM pni where  age=35";
	if ($conn->query($sql)==TRUE) {
		echo "record deleted successfully";
	} else {
		echo "Error deleting record".$conn->error;
	}
	$conn->close();


	?>

