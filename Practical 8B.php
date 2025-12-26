<?php
// "8BInsert.php"

$con = mysqli_connect("localhost", "root", "");
if(!$con)
    die('could not connect: ' . mysqli_error($con));

mysqli_select_db($con, "NKCOllege");
$query1 = "insert into department values('DCIS', 1, 9)";
if(mysqli_query($con, $query1))
    echo "Record 1 inserted successfully<br>";
else
    echo "Error inserting record 1: " . mysqli_error($con);

$query2 = "insert into department values('DBAF', 2, 5)";
if(mysqli_query($con, $query2))
    echo "Record 2 inserted successfully<br>";
else
    echo "Error inserting record 2: " . mysqli_error($con);

$query3 = "insert into department values('DBCOM', 3, 4)";
if(mysqli_query($con, $query3))
    echo "Record 3 inserted successfully<br>";
else
    echo "Error inserting record 3: " . mysqli_error($con);

mysqli_close($con);
?>