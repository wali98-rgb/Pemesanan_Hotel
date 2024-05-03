<?php
include '../../connection/connection.php';

$id = $_POST['id_city'];
$photo = $_POST['photo_city'];
$name_city = $_POST['name_city'];

if (isset($_POST['update'])) {
    $query = mysqli_query($con, "SELECT * FROM city_tbl WHERE id_city='$id'");

    $FF = mysqli_fetch_array($query);
    $deleteFF = "img/$FF[photo_city]";
    unlink($deleteFF);

    $extention_diperbolehkan = array('png', 'jpg', 'jpeg', 'jfif');
    $photo = $_FILES['photo_city']['name'];
    $ex = explode('.', $photo);
    $extention = strtolower(end($ex));
    $size = $_FILES['photo_city']['size'];
    $file_tmp = $_FILES['photo_city']['tmp_name'];

    if (in_array($extention, $extention_diperbolehkan) === true) {
        if ($size < 1044070) {
            move_uploaded_file($file_tmp, 'img/' . $photo);
            mysqli_query($con, "UPDATE city_tbl SET
                    photo_city = '$photo',
                    name_city = '$name_city'
                    WHERE id_city = '$id'
                ");
        }
    }
}

header('location:city.php?msg=sc_up');
