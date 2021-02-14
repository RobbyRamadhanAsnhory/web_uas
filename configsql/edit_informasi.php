<?php
require_once "koneksi.php";

$id = $_POST["id"];
$judul = $_POST["judul"];
$descripsi = $_POST["desc"];
$image = $_POST["image"];
$footer = $_POST["ref"];
$kategori = $_POST["kategori"];

    $q = $database_connection->prepare("UPDATE `informasi` SET `judul` = ?,
      `deskripsi`=?, `image`=?, `footer`=?, `kategori`=? WHERE id = ?");
    $result = $q->execute([$judul, $descripsi, $image, $footer, $kategori, $id]);
    
        header("Location: ../HalamanUtama.php");

 