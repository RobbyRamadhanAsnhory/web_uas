<?php
require_once "koneksi.php";
session_start();
$username = $_POST["username"];
$password = $_POST["pass"];



try {
    $result = $database_connection->prepare("SELECT * FROM `user` WHERE `username` = ? ;");
    $result->execute([$username]);

    $count = $result->rowCount();

    if ($count == 1) {
        $data = $result->fetch();
        if (sha1($password) == $data["password"]) {
            $_SESSION["userid"] = $data["id"];
            $_SESSION["username"] = $data["username"];
            $_SESSION["name"] = $data["nama"];
            $_SESSION["judul"] = $data["judul"];
            header("Location: ../HalamanUtama.php");
            return;
        } else {
            echo "<script type='text/javascript'>
        alert('Password yang anda masukan tidak benar');
        window.location.replace('../Login.php');
        </script>";
        }
    } else {
        echo "<script type='text/javascript'>
        alert('Username tidak terdaftar');
        window.location.replace('../Login.php');
        </script>";
    }
} catch (PDOException $e) {
    $message =  $e->getMessage();
    echo "<script type='text/javascript'>
    alert('$message');
    window.location.replace('../Login.php');
    </script>";
}
