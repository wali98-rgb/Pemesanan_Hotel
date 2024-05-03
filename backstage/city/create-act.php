<?php
include '../../connection/connection.php';

if (isset($_POST['add'])) {
    $extention_diperbolehkan = array('png', 'jpg', 'jpeg', 'jfif');
    $photo = $_FILES['photo_city']['name'];
    $ex = explode('.', $photo);
    $extention = strtolower(end($ex));
    $size = $_FILES['photo_city']['size'];
    $file_tmp = $_FILES['photo_city']['tmp_name'];

    if (in_array($extention, $extention_diperbolehkan) === true) {
        if ($size < 1044070) {
            move_uploaded_file($file_tmp, 'img/' . $photo);
            mysqli_query($con, "INSERT into city_tbl set
                    photo_city  = '$photo',
                    name_city   = '$_POST[name_city]'
                ");
        }
    }
}

header('location:city.php?msg=sc_add');
