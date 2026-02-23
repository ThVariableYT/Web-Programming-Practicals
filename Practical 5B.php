<?php
//Start the session
session_start();

//If the session counter is not set, initiate it.
if(!isset($_SESSION['visitor_count'])){
    $_SESSION['visitor_count'] = 1;
} else {
    //Increment visitor count.
    $_SESSION['visitor_count']++;
}

//Display session-based visitor count.
echo "You have visited this page " . $_SESSION['visitor_count'] . " times during this session.";
?>