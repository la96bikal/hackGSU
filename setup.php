

<?php
$servername = "localhost";
$username = "root";
$db='db';
$port=8889;
$password = "root";

// Create connection
$conn = new mysqli($servername, $port,$username, $password,$db);
$site_title = 'Anthem';
$page_title= 'Home Page';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";


?>