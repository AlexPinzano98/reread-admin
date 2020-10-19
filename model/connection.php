<?php
include 'config.php';
    try {
        $dsn = "mysql:host=".SERVIDOR.";dbname=".BD;
        $pdo = new PDO($dsn, USER, PASSWD);
        echo "<script> alert('conexion establecida')</script>";
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        echo $e->getMessage();
    }
?>