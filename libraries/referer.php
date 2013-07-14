<?php
session_start();

require_once "class_db.php";
$db = new database();

require_once "class_custom.php";
$custom = new custom();



include "request.php";

if($_SERVER['HTTP_REFERER'] == ''){
    $_SESSION['warning'] = "Silahkan login untuk mengakses halaman ini";
    header('location: index.php');
    exit();
}

if(!isset($_SESSION['username'])){
    $_SESSION['warning'] = "Silahkan login terlebih dahulu";
    header('location: index.php');
    exit();
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
