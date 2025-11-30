<?php
$n = 0;
//$n = $_REQUEST['num'];
$n=5;
$f = 1;
for($i = 1; $i <= $n; $i++)
    $f = $f * $i;
echo("$n factorial is " . $f);
?>