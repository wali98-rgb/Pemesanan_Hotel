<?php
include "connection/connection.php";

if (isset($_POST['acco'])) {
    $city = $_POST['kota'];

    header('location:pages/accommodation/acc_city.php?kota=' . $city);
}
