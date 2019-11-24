<?php
include 'koneksi.php';


$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
// $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$password = $_POST['password'];



// menyeleksi data admin dengan username dan passsword yang sesuai
$data  = mysqli_query($conn, "INSERT INTO `user` VALUES (NULL,'$name','$username','$password')") or die(mysqli_error($conn));


if ($data) {
    echo "<script>alert('Akun berhasil dibuat silahkan login untuk masuk.')</script>";
    echo "<script>window.location='login.php'</script>";
} else {
    echo "<script>alert('Gagal registrasi.')</script>";
    echo "<script>window.location='login.php'</script>";
}
