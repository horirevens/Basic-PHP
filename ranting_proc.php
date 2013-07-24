<?php

require_once "libraries/referer.php";

//$log = $_SESSION['name'];

if(isset($_POST['save'])){
    $id = $_POST['id'];
    $desa = $_POST['desa'];
    $jml_rw = $_POST['jml_rw'];
    $jml_anak_ranting = $_POST['jml_anak_ranting'];
    $jml_tps = $_POST['jml_tps'];
    $jml_dps = $_POST['jml_dps'];
    $action = $_POST['action'];
    
    if($action=="insert"){
        //$nextNoId = $custom->autoId('US','user');
        
        $sql = "INSERT INTO gerindra_ranting
                    (desa, jml_rw, jml_anak_ranting, jml_tps, jml_dps) 
                VALUES 
                    ('$desa','$jml_rw','$jml_anak_ranting','$jml_tps','$jml_dps')";
        if(!$db->query($sql)){
            die($sql);
        }else{
            $_SESSION['success'] = "Tambah data ranting berhasil!";
            header("Location: ranting.php");
            exit();
        }
    }
    
    if($action=='update'){
        $sql = "UPDATE gerindra_ranting SET
                    desa='$desa',jml_rw='$jml_rw',jml_anak_ranting='$jml_anak_ranting',jml_tps='$jml_tps',jml_dps='$jml_dps'
                    WHERE
                        id='$id'";
        if(!$db->query($sql)){
            die($sql);
        }else{
            $_SESSION['success'] = "Ubah data ranting berhasil";
            header("Location: ranting.php");
            exit();
        }
    }
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
