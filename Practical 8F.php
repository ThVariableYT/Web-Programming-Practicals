<?php
//Step 1: Connect to the mysql server
$con = mysqli_connect("localhost", "root", "");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
echo "Connected successfully to MySQL server.<br>";

//Ste 2: Create the database
$sql = "CREATE DATABASE College";
if (mysqli_query($con, $sql_db)) {
    echo "Database created successfully.<br>";
} else {
    echo "Error creating database: " . mysqli_error($con) . "<br>";
}

//Step 3: Select the database
mysqli_select_db($con, "College");

//Step 4: Create the table
$sql_table = "CREATE TABLE Students (
sno INT PRIMARY KEY,
sname VARCHAR(50),
percentage FLOAT
)";

if (mysqli_query($con, $sql_table)) {
    echo "Table Students created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($con) . "<br>";
}

//Step 5: Close the connection
mysqli_close($con);
?>