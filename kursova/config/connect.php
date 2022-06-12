<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'expedition');
if(!$connect) {
  die('erro connect to bd');
}