<?php
    echo strlen("Hello");
    echo("<br>");
    echo strrchr("Hello world!" , "world");
    echo("<br>");
    echo str_replace("world" , "Peter" , "Hello world!");
    echo("<br>");
    echo str_word_count("Hello world");
    echo("<br>");
    echo strpos("I love php, I love php too!" , "php");
    echo("<br>");
    echo substr_count("Hello world. The world is nice" , "world");
    echo("<br>");
    echo substr("Hello world" , 6);
    echo("<br>");
    echo strtolower("HELLO WORLD");
    echo("<br>");
    echo strtoupper("hello world");
    echo("<br>");
    echo strcmp("Hello world!" , "Hello world!");
    echo("<br>");
    echo strcasecmp("Hello world!" , "Hello world!");
    echo("<br>");
?>