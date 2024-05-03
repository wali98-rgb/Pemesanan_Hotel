<?php
include '../../connection/connection.php';

if (isset($_POST['add'])) {
    $extention_diperbolehkan = array('png', 'jpg', 'jpeg', 'jfif');
    $photo = $_FILES['photo_hotel']['name'];
    $ex = explode('.', $photo);
    $extention = strtolower(end($ex));
    $size = $_FILES['photo_hotel']['size'];
    $file_tmp = $_FILES['photo_hotel']['tmp_name'];

    if (in_array($extention, $extention_diperbolehkan) === true) {
        if ($size < 1044070) {
            move_uploaded_file($file_tmp, 'img/' . $photo);
            mysqli_query($con, "INSERT into hotel_tbl set
                    photo_hotel  = '$photo',
                    name_hotel   = '$_POST[name_hotel]',
                    room_hotel   = '$_POST[room_hotel]',
                    city_hotel   = '$_POST[city_hotel]',
                    price_hotel  = '$_POST[price_hotel]'
                ");
        }
    }
}

header('location:hotel.php?msg=sc_add');
