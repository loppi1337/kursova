<?php
require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `workers` WHERE `workers`.`id` = '$id'");

header('Location: /');