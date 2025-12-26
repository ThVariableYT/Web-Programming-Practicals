<?php
// "8DUpdate.php"

$con = mysqli_connect("localhost", "root", "");
if(!$con)
    die('could not connect: ' . mysqli_error($con));

mysqli_select_db($con, "NKCOllege");
$query = "update department set no_of_faculty = 10 where dno = 1";

if(mysqli_query($con, $query))
    echo "<br>Record updated";
else
    echo "<br>Record not updated";

mysqli_close($con);
?>