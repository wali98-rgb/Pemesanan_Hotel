<?php
include '../../connection/connection.php';

$id = $_POST['id_hotel'];
$photo = $_POST['photo_hotel'];
$name_hotel = $_POST['name_hotel'];
$room_hotel = $_POST['room_hotel'];
$city_hotel = $_POST['city_hotel'];
$price_hotel = $_POST['price_hotel'];

if (isset($_POST['update'])) {
    $query = mysqli_query($con, "SELECT * FROM hotel_tbl WHERE id_hotel='$id'");

    $FF = mysqli_fetch_array($query);
    $deleteFF = "img/$FF[photo_hotel]";
    unlink($deleteFF);

    $extention_diperbolehkan = array('png', 'jpg', 'jpeg', 'jfif');
    $photo = $_FILES['photo_hotel']['name'];
    $ex = explode('.', $photo);
    $extention = strtolower(end($ex));
    $size = $_FILES['photo_hotel']['size'];
    $file_tmp = $_FILES['photo_hotel']['tmp_name'];

    if (in_array($extention, $extention_diperbolehkan) === true) {
        if ($size < 1044070) {
            move_uploaded_file($file_tmp, 'img/' . $photo);
            mysqli_query($con, "UPDATE hotel_tbl SET
                    photo_hotel = '$photo',
                    name_hotel = '$name_hotel',
                    room_hotel = '$room_hotel',
                    city_hotel = '$city_hotel',
                    price_hotel = '$price_hotel'
                    WHERE id_hotel = '$id'
                ");
        }
    }
}

header('location:hotel.php?msg=sc_up');
