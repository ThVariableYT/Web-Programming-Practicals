<?php
//"8a,php"
$con=mysqli_connect("localhost", "root","");
if(!$con)
die('could not connect: '.mysqli_error($con));
if(mysqli_query($con, "create database NKCollege"))
echo "Database created successfully";
else
echo "Error creating database:".mysqli_error($con);
mysqli_select_db($con, "NKCollege");
$query=" create table department (dname varchar(50),
dno smallint, no_of_faculty smallint)";
if(mysqli_query($con, $query))
echo "Table Created successfully";
else
echo "Error creating table:".mysqli_error($con);
mysqli_close($con);
?>