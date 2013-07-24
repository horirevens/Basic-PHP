<?php

require_once "libraries/referer.php";

//$log = $_SESSION['name'];

if(isset($_POST['save'])){
    $jenis = $_POST['jenis'];
    $no_ktp = $_POST['no_ktp'];
    $no_kta = $_POST['no_kta'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $tempat = $_POST['tempat'];
    $tgl_lahir = $custom->dateEnglishMinus($_POST['tgl_lahir']);
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $kecamatan = $_POST['kecamatan'];
    $desa = $_POST['desa'];
    $no_telp = $_POST['no_telp'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $jml_anggota = $_POST['jml_anggota'];
    $no_pemilih = $_POST['no_pemilih'];
    $action = $_POST['action'];
    $date = date('Y-m-d H:i:s');
    
    if($action=="insert"){
        //$nextNoId = $custom->autoId('US','user');
        
        $sql = "INSERT INTO gerindra_pengurus
                    (no_ktp, no_kta, nama, jabatan, tempat, tgl_lahir, alamat, kota, kecamatan, desa, no_telp, 
                     no_hp, email, jml_anggota, no_pemilih, jenis, datetime) 
                VALUES 
                    ('$no_ktp','$no_kta','$nama','$jabatan','$tempat','$tgl_lahir','$alamat','$kota','$kecamatan',
                     '$desa','$no_telp','$no_hp','$email','$jml_anggota','$no_pemilih','$jenis','$date')";
        if(!$db->query($sql)){
            die($sql);
        }else{
            $_SESSION['success'] = "Tambah data pengurus berhasil!";
            header("Location: pengurus.php");
            exit();
        }
    }
    
    if($action=='update'){
        $sql = "UPDATE gerindra_pengurus SET
                    no_kta='$no_kta',nama='$nama',jabatan='$jabatan',tempat='$tempat',tgl_lahir='$tgl_lahir',
                    alamat='$alamat',kota='$kota',kecamatan='$kecamatan',desa='$desa',no_telp='$no_telp',no_hp='$no_hp',
                    email='$email',jml_anggota='$jml_anggota',no_pemilih='$no_pemilih',jenis='$jenis'
                    WHERE
                        no_ktp='$no_ktp'";
        if(!$db->query($sql)){
            die($sql);
        }else{
            $_SESSION['success'] = "Ubah data pengurus berhasil";
            header("Location: pengurus.php");
            exit();
        }
    }
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
