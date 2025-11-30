<?php
$n = 7;
$i = 0;
$f = 0;
for($i = 2; $i < $n; $i++)
{
    if($n % $i == 0)
    {
        $f = 1;
        break;
    }
}
if($f == 1)
{
    echo "$n is not a prime number";
}
else
{
    echo "$n is a prime number";
}