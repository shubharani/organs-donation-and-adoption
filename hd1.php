

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

<br><center>
<h4><u>LISTS OF DONORS DETAILS</u></h4>
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


?><br><form action="up.php" method="post"><input type="submit" value="UPDATE" ></form>
click next to enter donor's information<br>

<img src="image/101.jpg" width="200" height="180">
<form action="h2.html" method="get">


<input type="submit" value="NEXT">
</form>
</center>
</body>
</html>