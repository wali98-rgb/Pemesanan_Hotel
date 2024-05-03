<?php
include '../../connection/connection.php';

$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM hotel_tbl WHERE id_hotel='$id'");

$FF = mysqli_fetch_array($query);
$deleteFF = "img/$FF[photo_hotel]";
unlink($deleteFF);

mysqli_query($con, "DELETE FROM hotel_tbl WHERE id_hotel='$id'");
header('location:hotel.php?msg=sc_dl');
