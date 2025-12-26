<?php
// 8EDelete.php

$con = mysqli_connect("localhost", "root", "");
if(!$con)
    die('could not connect: ' . mysqli_error($con));

mysqli_select_db($con, "NKCOllege");
$query = "delete from department where dno = 2";

if(mysqli_query($con, $query))
    echo "<br>Record deleted";
else
    echo "<br>Record not deleted";

mysqli_close($con);
?>