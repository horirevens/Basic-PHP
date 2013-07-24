<?php include "libraries/referer.php"; ?>
<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM gerindra_dpc WHERE id='$id'";
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
        <b>Lampiran</b><br><br>
        <span style="padding-left: 1em;">a. Untuk DPC</span><br>
        <span style="padding-left: 2em;">a.1. DATA UMUM KAB/KOTA &nbsp;<?php echo $data['kota']; ?></span>
        <br><br>

        
        <table class="border bordered" >
            <tr>
                <td width="35%">Nama Kabupaten/Kota <span style="float: right">:</span></td>
                <td><?php echo $data['kota']; ?></td>
            </tr>
            <tr>
                <td>Jumlah Kecamatan <span style="float: right">:</span></td>
                <td><?php echo $data['jml_kecamatan']; ?></td>
            </tr>
            <tr>
                <td>Nama Bupati/Walikota <span style="float: right">:</span></td>
                <td><?php echo $data['nama_walikota']; ?></td>
            </tr>
            <tr>
                <td>Nama Wakil Bupati/Walikota <span style="float: right">:</span></td>
                <td><?php echo $data['nama_wakil']; ?></td>
            </tr>
            <tr>
                <td>Nama Ketua DPRD <span style="float: right">:</span></td>
                <td><?php echo $data['nama_dprd']; ?></td>
            </tr>
            <tr>
                <td>Asal Partai Bupati/Walikota <span style="float: right">:</span></td>
                <td><?php echo $data['partai_walikota']; ?></td>
            </tr>
            <tr>
                <td>Asal Partai Wakil Bupati/Walikota <span style="float: right">:</span></td>
                <td><?php echo $data['partai_wakil']; ?></td>
            </tr>
            <tr>
                <td>Asal Partai Ketua DPRD <span style="float: right">:</span></td>
                <td><?php echo $data['partai_dprd']; ?></td>
            </tr>
            <tr>
                <td>Tahun Pilkada <span style="float: right">:</span></td>
                <td><?php echo $data['thn_pilkada']; ?></td>
            </tr>
        </table>
    </body>
</html>