<?php
//Display cookie
if (isset($_COOKIE['user'])) {
    echo "Welcome back, " . $_COOKIE['user'] . "!";
} else {
    echo "Cookie 'User' is not set.";
}
?>