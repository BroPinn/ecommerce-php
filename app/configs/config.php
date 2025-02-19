<?php
$host = '127.0.0.1';     
$username = 'root';    
$password = '';  
$database = 'onestore_db';

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    // Detailed error reporting
    die("Connection failed: " . mysqli_connect_error() . "<br>" .
        "Host: " . $host . "<br>" .
        "Username: " . $username . "<br>" .
        "Database: " . $database . "<br>" .
        "MySQL Error Number: " . mysqli_connect_errno()
    );
}
?>