<?php
// "8CSelect.php"

$con = mysqli_connect("localhost", "root", "");
if(!$con)
    die('could not connect: ' . mysqli_error($con));

mysqli_select_db($con, "NKCOllege");   
$sql = "select * from department";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0)
{
    echo "<table border='1'>
          <tr>
          <th>DName</th>
          <th>DNo</th>
          <th>No of Faculty</th>
          </tr>";

    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$row['dname']."</td>";
        echo "<td>".$row['dno']."</td>";
        echo "<td>".$row['no_of_faculty']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo "Table is empty";
}

mysqli_close($con);
?>
