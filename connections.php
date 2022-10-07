<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "JavaHobbit";

if(!$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
    {
        echo "failed to connect";
    }
    die;
    
    