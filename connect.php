<?php

// Create connection

// here we are calling on (retrieving) the variables from config.php to create the database connection object.
$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    // here the if statement checks if there is an error, and if so, kill all PHP scripts: run the die() function
    die("Connection failed: " . $conn->connect_error);
}

// the page will continue with the next instruction in the parent file (header.php) now...
