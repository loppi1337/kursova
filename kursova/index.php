<?php
  require_once 'config/connect.php';
  $workers = mysqli_query($connect, "SELECT * FROM `workers`");
  $workers = mysqli_fetch_all($workers);
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <title>workers</title>
 
</head>
<body>   


<table>
  <tr>
    <th>id</th>
    <th>name_sur</th>
    <th>number</th>
    <th>adress</th>
    <th>age</th>
    <th>position</th>
    <th>&#9998;</th>
    <th>&#10006;</th>
  </tr>
  <?php
    foreach($workers as $item) {
      echo '
      <tr>  
        <td>'.$item[0].'</td>
        <td>'.$item[1].'</td>
        <td>'.$item[2].'</td>
        <td>'.$item[3].'</td>
        <td>'.$item[4].'</td>
        <td>'.$item[5].'</td>
        <td><a href ="update.php?id='.$item[0].'">Update</a></td>
        <td><a href ="vendor/delete.php?id='.$item[0].'">delete</a></td>
      </tr>
      ';
     
    }
  ?>
  
</table>

<h2>add new worker</h2>
  <form action="vendor/create.php" method="post">
    <p>name_sur</p>
    <input type="text" name="name_sur">
    <p>number</p>
    <input type="text" name="number">
    <p>adress</p>
    <input type="text" name="adress">
    <p>age</p>
    <input type="text" name="age">
    <p>position</p>
    <input type="text" name="position">
    <button type="submit">add</button>
  </form>


</body>
</html>