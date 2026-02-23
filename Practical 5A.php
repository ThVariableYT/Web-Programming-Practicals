<?php
//Start the session
session_start();

//Create session variable
$_SESSION["Username"]="Jash";
$_SESSION["Password"]="Admin";

//Display session variable
echo "Session Variabless: <br>";
echo "Username: " . $_SESSION["Username"] . "<br>";
echo "Password: " . $_SESSION["Password"] . "<br>";
?>