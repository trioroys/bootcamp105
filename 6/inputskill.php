<?php

include 'connection.php';

$name = $_POST['name'];
$user_id = $_POST['user_id'];

$db = new con();
$db->inputSkill($name, $user_id);

header("Location: index.php");
exit();