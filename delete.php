<?php

$connection = mysqli_connect("localhost", "root", "", "koli_bd");
        if ($connection->connect_error) {
            die("Connection failed:" . $connection->connect_error);
        }
$id = $_POST['id'];
$query = "Delete FROM Koli Where id = $id";
mysqli_query($connection,$query);
mysqli_close($connection);

include "display-remove.php";
?>