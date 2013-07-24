<?php

require_once "libraries/referer.php";

//$log = $_SESSION['name'];

if(isset($_POST['save'])){
    $id = $_POST['id'];
    $kecamatan = $_POST['kecamatan'];
    $jml_desa = $_POST['jml_desa'];
    $jml_kelurahan = $_POST['jml_kelurahan'];
    $jml_ranting = $_POST['jml_ranting'];
    $action = $_POST['action'];
    
    if($action=="insert"){
        //$nextNoId = $custom->autoId('US','user');
        
        $sql = "INSERT INTO gerindra_pac
                    (kecamatan, jml_desa, jml_kelurahan, jml_ranting) 
                VALUES 
                    ('$kecamatan','$jml_desa','$jml_kelurahan','$jml_ranting')";
        if(!$db->query($sql)){
            die($sql);
        }else{
            $_SESSION['success'] = "Tambah data pac berhasil!";
            header("Location: pac.php");
            exit();
        }
    }
    
    if($action=='update'){
        $sql = "UPDATE gerindra_pac SET
                    kecamatan='$kecamatan',jml_desa='$jml_desa',jml_kelurahan='$jml_kelurahan',jml_ranting='$jml_ranting'
                    WHERE
                        id='$id'";
        if(!$db->query($sql)){
            die($sql);
        }else{
            $_SESSION['success'] = "Ubah data pac berhasil";
            header("Location: pac.php");
            exit();
        }
    }
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
