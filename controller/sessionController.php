<?php
require_once '../model/user.php';
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:../index.php');
}
echo '<div class="logo"><h1>Bienvenido '.$_SESSION['user']->getName().'</h1><h1 style="float: right;"><a href="../controller/logoutController.php">Logout</a></h1></div>';