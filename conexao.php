<?php
	$host='localhost';
    $username = 'root';
    $password = '';
    $db = 'ecommerce';
    $dbh = new PDO("mysql:host=$host;dbname=$db", $username , $password);
?>