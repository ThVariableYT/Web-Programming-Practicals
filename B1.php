B. 1)
<?php
$conn = mysqli_connect("localhost", "root", "");

mysqli_query($conn, "CREATE DATABASE ABCCompany");

mysqli_select_db($conn, "ABCCompany");

mysqli_query($conn, "CREATE TABLE Product (
    Id INT PRIMARY KEY,
    Name VARCHAR(50)
)");

mysqli_query($conn, "INSERT INTO Product VALUES (1, 'Laptop')");

echo "Database ABCCompany, table Product and 1 record inserted";
?>