<?php
// 1 Dimensional Array

$cars = array("Volvo", "BMW", "Toyota");
echo "I like $cars[1]";
$arrlength = count($cars);
echo $arrlength ."<br>";
for ($x = 0; $x < $arrlength; $x++)
{
	echo $cars[$x] . "<br>";
}
?>