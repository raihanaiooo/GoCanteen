<?php

$db_name = 'mysql:host=localhost;dbname=food_db';
$user_name = 'root';
$user_password = 'hacok';

$conn = new PDO($db_name, $user_name, $user_password);
echo("hehe");
?>