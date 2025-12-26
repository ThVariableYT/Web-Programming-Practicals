A. 2)
<?php
$conn = mysqli_connect("localhost", "root", "");

mysqli_query($conn, "CREATE DATABASE Library");

mysqli_select_db($conn, "Library");

$sql = "CREATE TABLE Books (
    Id INT PRIMARY KEY,
    Name VARCHAR(50),
    Author VARCHAR(50),
    Price INT
)";

mysqli_query($conn, $sql);

echo "Database Library and table Books created successfully";
?>