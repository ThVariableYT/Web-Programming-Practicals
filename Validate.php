<?php
$USER = $_REQUEST['Username'];
$PASS = $_REQUEST['Password'];
if ($USER == "admin" && $PASS == "admin@123") {
    echo "Welcome, " . $USER . "!";
} else {
    echo "Invalid username or password.";
}
?>