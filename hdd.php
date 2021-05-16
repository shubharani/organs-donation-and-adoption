

<html xmlns="http://www.w3.org/1999/xhtml">
<?xml version="1.0" encoding="UTF-8"?>
<head>

<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
<div class="a">
  <center>BLOOD BANK MANAGEMENT SYSTEM</center>


<div id="menu">
    <ul>
   <li><a href="R.PHP">REGISTERED  </a></li>
    <li><a href="hdd.php">DONOR'S</a></li>
        
      <li><a href="hddd.php">NEEDER'S</a></li>
      <li><a href="al.html">UPDATE</a></li>
      <li><a href="ff.php">FEEDBACK</a></li>
  
      </ul>
  </ul>
  </div>

</div>
<br>
<br>
<br>
<h4>LISTS OF DONORS DETAILS</h4>
<?php

  
mysql_connect("localhost","root","");
mysql_select_db("dbproc");
  
  
  $res=mysql_query("SELECT * FROM hdi");

  ?>
  
  <table border="2">
  <thead>
    <tr>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Age</th>
      <th>DateOfBirth</th>
      <th>Gender</th>
      <th>Address</th>
      <th>MobileNumber1</th>
      <th>MobileNumber2</th>
      <th>BloodGroup</th>
      <th>Disease</th>
      
 
      <th>Registered Date</th>
     
    </tr>
  </thead>
  <tbody>
<?php
      if( mysql_num_rows( $res )==0 ){
        echo '<tr><td colspan="11">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $res ) ){
          echo "<tr>
<td>{$row['Firstname']}</td>
<td>{$row['Lastname']}</td>
<td>{$row['Age']}</td>
<td>{$row['DateOfBirth']}</td>
<td>{$row['Gender']}</td>
<td>{$row['Address']}</td>
<td>{$row['MobileNumber1']}</td>
<td>{$row['MobileNumber2']}</td>
<td>{$row['BloodGroup']}</td>
<td>{$row['Disease']}</td>

   
      <td>{$row['Registered Date']}</td>
      

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


</body>
</html>