<?php
$x=151;
$y =$x;
$rev = 0;
while ($x > 0) {
$r = $x % 10;
$rev = $rev * 10 + $r;
$x = (int) ($x/10); // integer division
}
if ($y == $rev)
echo "Palindrom Number";
else
echo "Not a Palindrom Number";
?>
