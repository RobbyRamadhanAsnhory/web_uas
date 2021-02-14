<?php
require_once "koneksi.php";

$nama_lengkap = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["pass"];
$confirm_password = $_POST["konfirmasipass"];

if ($password != $confirm_password) {
    echo "<script type='text/javascript'>
    alert('Konfirmasi password tidak sesuai');
    window.location.replace('../Gagalregist.php');
    </script>";
} else {
    $q = $database_connection->prepare("INSERT INTO `user` (`id`,`nama`, `username`,
  `password`) VALUES (NULL, ?,?,SHA1(?));");
    $result = $q->execute([$nama_lengkap, $username, $password]);
    if ($result) {
        header("Location: ../BerhasilRegis.php");
        return;
    } else {
        echo "<script type='text/javascript'>
        alert('Username telah di gunakan');
        window.location.replace('../Gagalregist.php');
        </script>";
    }
}
