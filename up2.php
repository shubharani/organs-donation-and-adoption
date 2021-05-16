

<html xmlns="http://www.w3.org/1999/xhtml">
<?xml version="1.0" encoding="UTF-8"?>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="home.css">

</head>
<div class="a">
  <center>BLOOD BANK MANAGEMENT SYSTEM</center>


<div id="menu">
    <ul>
    <li><a href="home.html">HOME </a></li>
    <li>    <a href="intro.html">INTRODUCTION</a></li>
        
      <li>
  <a href="hd1.php"> LIST OF DONOR'S</a></li>
      <li><a href="hd.php">LIST OF NEEDER'S</a></li>
                                
<li><a href="hs1.php">HOSPITAL DETAILES</a></li>
<li><a href="cn.html">CONTACT US</a></li>
<li><a href="fb.html">FEEDBACK</a></li>
<li><a href="login.html">LOGOUT</a></li>


  </ul>
  </div>

</div>



<center>

<br>
<h4><u> UPDATING HOSPITAL CONTACTS</u></h4>

<?php

	
mysql_connect("localhost","root","");
mysql_select_db("dbproc");
	
  
	$res=mysql_query("SELECT * FROM hs");

	?>
	
	<table border="2">
  <thead>
    <tr>
      <th>HospitalName</th>
      <th>DoctorName</th>
      
      <th>Address</th>
      <th>MobileNumber</th>
     
      <th>RequiredBloodGroup</th>
     
      <th>RegisteredDate</th>
      <th>Update</th>
    </tr>
  </thead>
  <tbody>
<?php
      if( mysql_num_rows( $res )==0 ){
        echo '<tr><td colspan="6">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_array( $res ) ){
          echo "<tr>
<td>{$row['HospitalName']}</td>
<td>{$row['DoctorName']}</td>

<td>{$row['Address']}</td>
<td>{$row['MobileNumber']}</td>

<td>{$row['RequiedBloodGroup']}</td>

    
     
      <td>{$row['RegisteredDate']}</td>
     <td> <a href='edit2.html?edit=$row[0]'>edit</a></td>

</tr>\n";
        }
      }
    ?>
  </tbody>
</table>
<?php

	// Close your database connection
	mysql_close();


?>