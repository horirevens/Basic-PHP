<?php include "libraries/referer.php"; ?>
<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM gerindra_ranting WHERE id='$id'";
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
<!--        <b>Lampiran</b><br><br>-->
        <span style="padding-left: 1em;">c. Untuk Pimpinan Ranting</span><br>
        <span style="padding-left: 2em;">c.1. DATA UMUM KELURAHAN/DESA &nbsp;<?php echo $data['desa']; ?></span>
        <br><br>

        
        <table class="border bordered" >
            <tr>
                <td width="35%">Nama Desa <span style="float: right">:</span></td>
                <td><?php echo $data['desa']; ?></td>
            </tr>
            <tr>
                <td>Jumlah RW <span style="float: right">:</span></td>
                <td><?php echo $data['jml_rw']; ?></td>
            </tr>
            <tr>
                <td>Jumlah Anak Ranting yang telah terbentuk <span style="float: right">:</span></td>
                <td><?php echo $data['jml_anak_ranting']; ?></td>
            </tr>
            <tr>
                <td>Jumlah TPS <span style="float: right">:</span></td>
                <td><?php echo $data['jml_tps']; ?></td>
            </tr>
            <tr>
                <td>Jumlah DPS <span style="float: right">:</span></td>
                <td><?php echo $data['jml_dps']; ?></td>
            </tr>
        </table>
    </body>
</html>