<?php
//Create cookies
$cookie_name = "User";
$cookie_value = "Jash";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
echo("Cookie is set");
?>