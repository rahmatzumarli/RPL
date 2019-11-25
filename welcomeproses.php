<?php
include "koneksi.php";

$nm_depan = $_POST['nm_depan'];
$nm_belakang = $_POST['nm_belakang'];
$asal = $_POST['asal'];
$tujuan = $_POST['tujuan'];
$tgl_pergi = $_POST['tgl_pergi'];
$tgl_pulang = $_POST['tgl_pulang'];
$alamat = $_POST['alamat'];
$armada = $_POST['armada'];
$jml_penumpang = $_POST['jml_penumpang'];

$query = mysqli_query($conn, "INSERT INTO tiket 
        VALUES(NULL,'$nm_depan','$nm_belakang','$asal','$tujuan','$tgl_pergi','$tgl_pulang','$alamat','$armada','$jml_penumpang')");

if ($query) {
    echo "<script>alert('Data berhasil diinput')</script>";
    // echo "<script>window.location = ''</script>";
    echo "hasil dapat dilihat disini <a href='tampiltiket.php'>disini</a>";
} else {
    echo "Data gagal diinput";
}
