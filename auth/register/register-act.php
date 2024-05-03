<?php
include "../../connection/connection.php";

if (isset($_POST['regis'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $no_telp = $_POST['no_telp'];

    mysqli_query($con, "INSERT INTO user_tbl SET
        username_user = '$username',
        email_user = '$email',
        password_user = '$password',
        no_telp_user = '$no_telp',
        level_user = 'user'
    ");

    header('location:../login/login.php?msg=sc_lg');
} else {
    header('location:register.php?msg=fl_lg');
}
