<?php

require_once "libraries/referer.php";

//$log = $_SESSION['name'];

if(isset($_POST['save'])){
    $id = $_POST['id'];
    $nama_walikota = $_POST['nama_walikota'];
    $nama_wakil = $_POST['nama_wakil'];
    $nama_dprd = $_POST['nama_dprd'];
    $partai_walikota = $_POST['partai_walikota'];
    $partai_wakil = $_POST['partai_wakil'];
    $partai_dprd = $_POST['partai_dprd'];
    $kota = $_POST['kota'];
    $jml_kecamatan = $_POST['jml_kecamatan'];
    $thn_pilkada = $_POST['thn_pilkada'];
    $action = $_POST['action'];
    
    if($action=="insert"){
        //$nextNoId = $custom->autoId('US','user');
        
        $sql = "INSERT INTO gerindra_dpc
                    (nama_walikota, nama_wakil, nama_dprd, partai_walikota, partai_wakil, partai_dprd, jml_kecamatan,
                     thn_pilkada, kota) 
                VALUES 
                    ('$nama_walikota','$nama_wakil','$nama_dprd','$partai_walikota','$partai_wakil','$partai_dprd',
                     '$jml_kecamatan','$thn_pilkada','$kota')";
        if(!$db->query($sql)){
            die($sql);
        }else{
            $_SESSION['success'] = "Tambah data dpc berhasil!";
            header("Location: dpc.php");
            exit();
        }
    }
    
    if($action=='update'){
        $sql = "UPDATE gerindra_dpc SET
                    nama_walikota='$nama_walikota',nama_wakil='$nama_wakil',nama_drpd='$nama_dprd',partai_walikota='$partai_walikota',
                    partai_wakil='$partai_wakil',partai_dprd='$partai_dprd',jml_kecamatan='$jml_kecamatan',thn_pilkada='$thn_pilkada',
                    kota='$kota'
                    WHERE
                        id='$id'";
        if(!$db->query($sql)){
            die($sql);
        }else{
            $_SESSION['success'] = "Ubah data dpc berhasil";
            header("Location: dpc.php");
            exit();
        }
    }
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
