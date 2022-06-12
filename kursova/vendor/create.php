<?php
require_once '../config/connect.php';

//print_r($_POST);


$name_sur = $_POST['name_sur'];
$number = $_POST['number'];
$adress = $_POST['adress'];
$age = $_POST['age'];
$position = $_POST['position'];

mysqli_query($connect, "INSERT INTO `workers` (`id`, `name_sur`, `number`, `adress`, `age`, `position`) VALUES (NULL, '$name_sur', '$number', '$adress', '$age', '$position')");

header('Location: /index.php');