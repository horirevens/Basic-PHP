<?php
session_start();

require_once "libraries/class_db.php";
$db = new database();

$username = $_POST['username'];
$password = $_POST['password'];

$sql_login = "SELECT * FROM user_login WHERE username='$username' AND password=PASSWORD('$password')";
$jml_data = $db->numrows($sql_login);
if($jml_data>0){
    $data_login = $db->fetchdata($sql_login);

    $_SESSION['username'] = $username;
    $_SESSION['name'] = $data_login['name'];

    header("Location: main.php");
    exit();
}else{
    $_SESSION['warning'] = "Username atau Password anda salah!";
    header("Location: index.php");
    exit();
}


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
