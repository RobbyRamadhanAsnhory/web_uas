<?php
session_start();
require_once "koneksi.php";

$judul = $_POST["judul"];
$title = $_POST["title"];
$descripsi = $_POST["desc"];
$image = $_POST["image"];
$footer = $_POST["ref"];
$kategori = $_POST["kategori"];
$date = date('Y-m-d H:i:s');
$nama =  $_SESSION["name"];


    $q = $database_connection->prepare("INSERT INTO `informasi` (`id`,`deskripsi`,`image`,`judul`,`footer`,
    `kategori`,`atas_nama`,`tanggal`) VALUES (NULL, ?,?,?,?,?,?,?);");
    $result = $q->execute( [$descripsi,$image,$judul,$footer,$kategori,$nama,$date]);

    header("Location: ../HalamanUtama.php");