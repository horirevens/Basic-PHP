<?php

include "libraries/referer.php";

$log = $_SESSION['name'];

if(isset($_POST['save'])){
    $id = $_POST['id'];
    $action = $_POST['action'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $active = $_POST['active'];
    $date_now = date('Y-m-d H:i:s');
    
    if($action=="insert"){
        $nextNoId = $custom->autoId('US','user');
        
        $sql = "INSERT INTO user
                    (id, name, address, dob, gender, active, creator, created_at) 
                VALUES 
                    ('$nextNoId','$name','$address','$dob','$gender','$active','$log','$date_now')";
        if(!$db->query($sql)){
            die($sql);
        }else{
            $_SESSION['success'] = "Tambah data user berhasil!";
            header("Location: user.php");
            exit();
        }
    }
    
    if($action=='update'){
        $sql = "UPDATE user SET
                        name='$name',address='$address',dob='$dob',gender='$gender',active='$active'
                        ,updater='$log',updated_at='$date_now'
                    WHERE
                        id='$id'";
        if(!$db->query($sql)){
            die($sql);
        }else{
            $_SESSION['success'] = "Ubah data user berhasil";
            header("Location: user.php");
            exit();
        }
    }
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
