<?php
for($i=0;$i<4;$i++)
{
for($j=0;$j<=$i;$j++)
{
if(($i+$j)%2==0)
echo "1";
else
echo"0";
}  
echo "\n";
}
?>