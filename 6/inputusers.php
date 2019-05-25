<?php

include 'connection.php';

$name = $_POST['name'];

$db = new con();
$db->inputUser($name);

header("Location: index.php");
exit();