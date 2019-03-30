<?php

$conn = new mysqli('localhost', 'root', '', 'notekeep');

if($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

?>