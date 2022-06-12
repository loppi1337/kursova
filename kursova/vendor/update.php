<?php
require_once '../config/connect.php';

$name_sur = $_POST['name_sur'];
$number = $_POST['number'];
$adress = $_POST['adress'];
$age = $_POST['age'];
$position = $_POST['position'];
$id = $_POST['id'];

mysqli_query($connect, "UPDATE `workers` SET  `name_sur` = '$name_sur', `number` = '$number', `adress` = '$adress', `age` = '$age', `position` = '$position' WHERE `workers`.`id` = '$id'");


header('Location: /');

    