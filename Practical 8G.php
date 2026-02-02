<?php
//Step 1: Database connection
$con = mysqli_connect("localhost","root","","College");
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected to Database.<br>";

//Step 2: Insert 3 records
$sql = "INSERT INTO Students (sno, sname, percentage) VALUES 
(1, 'Amit', 78.5),
(2, 'Neha', 85.2),
(3, 'Rahul', 90.0)";

if (mysqli_query($con, $sql)) {
    echo "3 Records inserted successfully.<br>";
} else {
    echo "Error inserting records: " . mysqli_error($con) . "<br>";
}

//Step 3: Close connection
mysqli_close($con);
?>