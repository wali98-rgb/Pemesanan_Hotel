<?php
include '../../connection/connection.php';

$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM city_tbl WHERE id_city='$id'");

$FF = mysqli_fetch_array($query);
$deleteFF = "img/$FF[photo_city]";
unlink($deleteFF);

mysqli_query($con, "DELETE FROM city_tbl WHERE id_city='$id'");
header('location:city.php?msg=sc_dl');
