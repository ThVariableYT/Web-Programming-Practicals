<?php
$con =mysqli_connect("localhost","root","","College");
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected to Database.<br>";

echo "<b> All student records </b><br>";
$q1 = "SELECT * FROM Student";
$r1 = mysqli_query($con, $q1);

while($row=mysqli_fetch_assoc($r1)){
    echo $row['sno'] . " " . $row['sname'] . " " . $row['percentage'] . "<br>";
}

echo "<br>";

echo "<b> Students with percentage > 80 </b><br>";
$q2 = "SELECT * FROM Student WHERE percentage > 80";
$r2 = mysqli_query($con, $q2);

while($row=mysqli_fetch_assoc($r2)){
    echo $row['sno'] . " " . $row['sname'] . " " . $row['percentage'] . "<br>";
}

echo "<br>";

echo "<b> Students ordered by percentage: </b><br>";
$q3 = "SELECT * FROM Student ORDER BY percentage DESC";
$r3 = mysqli_query($con, $q3);

while($row=mysqli_fetch_assoc($r3)){
    echo $row['sno'] . " " . $row['sname'] . " " . $row['percentage'] . "<br>";
}

mysqli_close($con);
?>