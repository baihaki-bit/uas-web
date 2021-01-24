<?php

include "mysql.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, md5($_POST['password']));

    $query = "SELECT * FROM user WHERE username= '$username' AND password = '$password'";
    $queryDB = mysqli_query($mysqli, $query);
    $check = mysqli_num_rows($queryDB);

    if ($check > 0) {
        // ambil data users
        $getData = mysqli_fetch_array($queryDB);
        // set session 
        $_SESSION['name'] = $getData;
        $_SESSION['is_login']  = true;

        header("location: member.php");
    } else {
        echo "Email atau password yang anda masukkan salah";
    }
} else {
    return "Anda tidak di ijinkan";
}
