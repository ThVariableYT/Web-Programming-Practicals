<?php
// Multidimensional Array
// (Array inside Array)
$students = array(
	array("Name" => "Rahul", "Marks" => 85),
	array("Name" => "Sneha", "Marks" => 92),
	 );

for ($i = 0; $i < count($students); $i++)
{
	echo "Name:" . $students[$i]["Name"];
	echo "Marks:" . $students[$i]["Marks"];
}
?>