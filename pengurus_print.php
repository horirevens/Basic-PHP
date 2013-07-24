<?php include "libraries/referer.php"; ?>
<?php
    $no_ktp = $_GET['no_ktp'];
    $jenis = $_GET['jenis'];
    $sql = "SELECT * FROM gerindra_pengurus WHERE no_ktp='$no_ktp'";
    $data = $db->fetchdata($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "subviews/meta.php"; ?>
        <?php //include "subviews/css.php"; ?>
        
        <script src="includes/js/jquery.js"></script>
        <style>
            .border{
                width: 100%;
            }
            .border td{
                padding: 10px 0 5px 10px;
                border-top: 1px solid #000;
            }
            .bordered{
                border: 1px solid #000;
                border-collapse: separate;
                border-top: 0;
                border-left: 0;
            }
            .bordered td{
                border-left: 1px solid #000;
            }
        </style>
    </head>
    <body>
        <!--Lampiran<br>
        <span style="padding-left: 1em;">a. Untuk DPC</span><br>
        <span style="padding-left: 2em;">a.1. Data Umum</span><br><br>-->
        
        <div style="padding-left: 2em; line-height: 2em;"> 
            <?php if($jenis=='DPC'){ ?>
            a.2 Untuk Pengurus DPC :<br>
            NAMA KAB/KOTA :&nbsp;<?php echo $data['kota']; ?><br>
            DATA INDIVIDU PENGURUS DPC :
            <?php }elseif($jenis=='PAC'){ ?>
            b.2 Untuk Pengurus PAC :<br>
            NAMA KECAMATAN :&nbsp;<?php echo $data['kecamatan']; ?><br>
            DATA INDIVIDU PENGURUS PAC :
            <?php }else{ ?>
            c.2 Untuk Pengurus Ranting :<br>
            NAMA KELURAHAN/DESA :&nbsp;<?php echo $data['desa']; ?><br>
            DATA INDIVIDU PENGURUS RANTING :
            <?php } ?>
        </div><br><br>
        
        <table class="border bordered" >
            <tr>
                <td width="35%">Nama <span style="float: right">:</span></td>
                <td><?php echo $data['nama']; ?></td>
            </tr>
            <tr>
                <td>Jabatan di GERINDRA <span style="float: right">:</span></td>
                <td><?php echo $data['jabatan']; ?></td>
            </tr>
            <tr>
                <td>Tempat, tanggal lahir <span style="float: right">:</span></td>
                <td><?php echo $data['tempat'].', '.$custom->dateToIndo($data['tgl_lahir']); ?></td>
            </tr>
            <tr>
                <td>Alamat <span style="float: right">:</span></td>
                <td><?php echo $data['alamat']; ?></td>
            </tr>
            <tr>
                <td></td><td>Kabupaten/Kota <span style="float: center">:</span>&nbsp;<?php echo $data['kota']; ?></td>
            </tr>
            <tr>
                <td></td><td>Kecamatan <span style="float: center">:</span>&nbsp;<?php echo $data['kecamatan']; ?></td>
            </tr>
            <tr>
                <td></td><td>Desa/Kelurahan <span style="float: center">:</span>&nbsp;<?php echo $data['desa']; ?></td>
            </tr>
            <tr>
                <td>No. Telp Rumah <span style="float: right">:</span></td>
                <td><?php echo $data['no_telp']; ?></td>
            </tr>
            <tr>
                <td>No. HP <span style="float: right">:</span></td>
                <td><?php echo $data['no_hp']; ?></td>
            </tr>
            <tr>
                <td>Alamat e-mail <span style="float: right">:</span></td>
                <td><?php echo $data['email']; ?></td>
            </tr>
            <tr>
                <td>Jumlah anggota keluarga yang terdaftar sebagai pemilih <span style="float: right">:</span></td>
                <td><?php echo $data['jml_anggota']; ?></td>
            </tr>
            <tr>
                <td>No. KTP <span style="float: right">:</span></td>
                <td><?php echo $data['no_ktp']; ?></td>
            </tr>
            <tr>
                <td>No. KTA <span style="float: right">:</span></td>
                <td><?php echo $data['no_kta']; ?></td>
            </tr>
            <tr>
                <td>No. terdaftar sebagai pemilih (sebutkan juga no. TPS dan RT/RW-nya) <span style="float: right">:</span></td>
                <td><?php echo $data['no_pemilih']; ?></td>
            </tr>
        </table>
    </body>
</html>