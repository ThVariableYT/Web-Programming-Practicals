<?php
// Upside down pattern
for($i = 6; $i >= 1; $i--){
    for($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}

// Normal pattern
for($i = 2; $i <= 6; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}
?>