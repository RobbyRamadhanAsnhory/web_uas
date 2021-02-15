<?php
require_once "koneksi.php";

$id = $_POST["id"];
$nama_lengkap = $_POST["name"];
$username = $_POST["username"];

    $q = $database_connection->prepare("UPDATE `user` SET `username` = ?,
      `nama`=? WHERE id = ?");
    $result = $q->execute([$username, $nama_lengkap, $id]);
    
        header("Location: ../Home.php");

 