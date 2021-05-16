

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
<h4> FEED BACK DETAILS</h4>
<?php

  
mysql_connect("localhost","root","");
mysql_select_db("dbproc");
  
  
  $res=mysql_query("SELECT * FROM fb");

  ?>
  
  <table border="2">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Comments</th>
      
      <th>ContactNumber</th>
      
     
    </tr>
  </thead>
  <tbody>
<?php
      if( mysql_num_rows( $res )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $res ) ){
          echo "<tr>
<td>{$row['Name']}</td>
<td>{$row['Email']}</td>
<td>{$row['Comments']}</td>
<td>{$row['ContactNumber']}</td>


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