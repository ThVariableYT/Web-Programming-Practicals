B. 2)
<?php
$conn = mysqli_connect("localhost", "root", "");

mysqli_query($conn, "CREATE DATABASE Hospital");

mysqli_select_db($conn, "Hospital");

mysqli_query($conn, "CREATE TABLE Doctors (
    Id INT PRIMARY KEY,
    Name VARCHAR(50),
    Age INT,
    Qualification VARCHAR(50)
)");

mysqli_query($conn, "CREATE TABLE Patient (
    Id INT PRIMARY KEY,
    Name VARCHAR(50)
)");

mysqli_query($conn, "INSERT INTO Patient VALUES (1, 'Rahul')");

echo "Database Hospital, tables Doctors & Patient created and 1 record inserted";
?>