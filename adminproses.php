<?php
include "koneksi.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];


$data = mysqli_query($conn, "SELECT * FROM admin where username='$username' and password='$password'") or die(mysqli_error($conn));
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:adminWelcome.php");
} else {
    header("location:admin.php?pesan=gagal");
}
