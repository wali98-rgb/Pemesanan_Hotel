<?php
session_start();
include '../../connection/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($con, "SELECT * FROM user_tbl WHERE username_user='$username' AND password_user='$password'");

$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $d = mysqli_fetch_assoc($data);

    if ($d['level_user'] == 'admin') {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = 'admin';
        $_SESSION['status'] = 'login';

        header('location:../../backstage/home.php');
    } else if ($d['level_user'] == 'user') {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = 'user';
        $_SESSION['status'] = 'login';

        header('location:../../index.php?msg=sc_lg');
    }
} else {
    header('location:login.php?msg=fl_lg');
}
