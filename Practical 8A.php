<?php
//"8a,php"
$con=mysql_connect(server: "localhost",username: "root",password: "");
if(!$con)
die('could not connect: '.mysql_error());
if(mysql_query(query: "create database NKCollege", link_identifier: $con))
echo "Database created successfully";
else
echo "Error creating database:".mysql_error();
mysql_select_db(database_name: "NKCollege", link_identifier: $con);
$query=" create table department (dname varchar(50),
dno smallint, no_of_faculty smallint)";
if(mysql_query(query: $query, link_identifier: $con))
echo "Table Created successfully";
else
echo "Error creating table:".mysql_error();
mysql_close(link_identifier: $con);
?>