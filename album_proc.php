<?php 

require_once "libraries/referer.php";

$log = $_SESSION['name'];

if(isset($_POST['save'])){
    $id = $_POST['id'];
    $action = $_POST['action'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date_now = date('Y-m-d H:i:s');
    
    if($action=="insert"){
        $nextNoId = $custom->autoId('AL','album');
        
        $sql = "INSERT INTO album
                    (id, name, description, creator, created_at) 
                VALUES 
                    ('$nextNoId','$name','$description','$log','$date_now')";
        if(!$db->query($sql)){
            die($sql);
        }else{
            $_SESSION['success'] = "Tambah data album berhasil!";
            header("Location: album.php");
            exit();
        }
    }
    
    if($action=='update'){
        $sql = "UPDATE album SET
                        name='$name',description='$description',updater='$log',updated_at='$date_now'
                    WHERE
                        id='$id'";
        if(!$db->query($sql)){
            die($sql);
        }else{
            $_SESSION['success'] = "Ubah data album berhasil";
            header("Location: album.php");
            exit();
        }
    }
}
 ?>