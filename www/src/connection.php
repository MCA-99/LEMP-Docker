<?php
    $mysqli = new mysqli("[YOUR DATABASE SERVER NAME]-db","YOUR DATABASE USER","[YOUR DATABASE USER PASSWORD]","[YOUR DATABASE NAME]");

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    } else {
        echo "Successfully connected to MySQL: " . $mysqli -> host_info;
    }
?>