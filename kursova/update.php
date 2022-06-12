<?php
require_once 'config/connect.php';
$workers_id = $_GET['id'];
$id = mysqli_query($connect, "SELECT * FROM `workers` WHERE `id`='$workers_id'");
$id = mysqli_fetch_assoc($id);

?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <title>workers update</title>
</head>
<body> 

<h2>Update</h2>
  <form action="vendor/update.php" method="post">
    <input type="hidden" name="id" value="<?= $id['id'] ?>">  
    <p>name_sur</p>
    <input type="text" name="name_sur" value="<?= $id['name_sur'] ?>">
    <p>number</p>
    <input type="text" name="number" value="<?= $id['number'] ?>">
    <p>adress</p>
    <input type="text" name="adress" value="<?= $id['adress'] ?>">
    <p>age</p>
    <input type="text" name="age" value="<?= $id['age'] ?>">
    <p>position</p>
    <input type="text" name="position" value="<?= $id['position'] ?>">
    <button type="submit">Update</button>
  </form>

  </body>
</html>
