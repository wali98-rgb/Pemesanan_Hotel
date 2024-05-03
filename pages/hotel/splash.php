<?php
include "../../connection/connection.php";

$city = $_GET['kota'];

header('location:../../pages/accommodation/acc_city.php?kota=' . $city);
