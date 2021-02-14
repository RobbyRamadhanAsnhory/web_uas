<?php
require_once "koneksi.php";

$id = $_POST["id"];

try {

    $q = $database_connection->prepare("DELETE FROM `informasi` WHERE id = ?");
    $result = $q->execute([$id]);
    if ($result) {
        header("Location: ../HalamanUtama.php");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
