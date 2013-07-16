<?php

require_once "libraries/class_upload.php";
$upload = new upload();

require_once "libraries/referer.php";

$log = $_SESSION['name'];
$dst_full = "includes/uploads/img_fulls/";
$album_id = $_POST['album_id'];
$date_now = date('Y-m-d H:i:s');
$action = $_POST['action'];
$filename = $_FILES['file']['name'];  

if(preg_match('/[.](jpg)|(gif)|(png)$/', $_FILES['file']['name'])) {  

    $filename = $_FILES['file']['name'];  
    $source = $_FILES['file']['tmp_name'];     
    $target = $dst_full.$filename;
    
    move_uploaded_file($source, $target);  
    $upload->createThumbnail($filename);  
}

if($action=="insert"){
    $nextNoId = $custom->autoId('PH','photo');
    $sql = "INSERT INTO photo
                (id, album_id, name, uploader, uploaded_at) 
            VALUES 
                ('$nextNoId','$album_id','$filename','$log','$date_now')";
    if(!$db->query($sql)){
        die($sql);
    }else{
        $_SESSION['success'] = "Tambah data photo berhasil!";
        header("Location: photo.php?album=".$album_id."");
        exit();
    }
}



/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
