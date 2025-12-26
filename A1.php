A. 1)
<?php
$conn = mysqli_connect("localhost", "root", "");

mysqli_query($conn, "CREATE DATABASE Student");

mysqli_select_db($conn, "Student");

$sql = "CREATE TABLE Marks (
    Id INT PRIMARY KEY,
    Name VARCHAR(50),
    Marks INT
)";

mysqli_query($conn, $sql);

echo "Database Student and table Marks created successfully";
?>