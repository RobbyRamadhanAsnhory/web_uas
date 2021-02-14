<?php
require_once 'koneksi.php';

try {
    $sql = 'SELECT * FROM `informasi`';
    $q = $database_connection->prepare($sql);
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}
