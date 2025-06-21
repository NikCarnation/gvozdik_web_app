<?php

$servername = "127.0.0.1";
$username = "root";
$password = "1111";
$dbname = "gvozdik_db";

$link = mysqli_connect($servername, $username, $password);

if (!$link) 
{
    die("Ошибка подключения: " . mysqli_connection_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

if (!mysqli_query($link, $sql))
{
    echo "Ошибка!!! База данных не создана.";
}


mysqli_close($link);

$link = mysqli_connect($servername, $username, $password, $dbname);

$sql = "CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(15) NOT NULL,
    pass VARCHAR(20) NOT NULL
  )";


if(!mysqli_query($link, $sql))
{
    echo "Ошибка при создании базы Users";
}



mysqli_close($link);

?>