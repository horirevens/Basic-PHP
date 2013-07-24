<?php include "libraries/referer.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "subviews/meta.php"; ?>
        <?php include "subviews/css.php"; ?>
        <script src="includes/js/jquery.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $('.dropdown-toggle').dropdown();
                $('#form1').validationEngine();
                $("#dob").datepicker({
                    dateFormat: 'yy/mm/dd',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '1940:2030'
                });
                //$("#nama_walikota").focus();
            })
            
        </script>
    </head>
    
    <body>
        <?php include "subviews/menu_nav.php"; ?>
       
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <legend>DPC - ADD&nbsp;
                        <a href="dpc_add.php" class="btn"><i class="icon-plus"></i>&nbsp;Add</a>
                        <a href="dpc.php" class="btn"><i class="icon-list-alt"></i>&nbsp;DPC</a>
                    </legend> 
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span4">&nbsp;</div>
                <div class="span4" style="text-align: center; margin-bottom: 5px;"><?php include "subviews/msg.php";?></div>
                <div class="span4">&nbsp;</div>
            </div>
            
            <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM gerindra_dpc WHERE id='$id'";
                $data = $db->fetchdata($sql);
            ?>
            
            <div class="row-fluid">
                <div class="span12">
                    <form name="form1" id="form1" action="dpc_proc.php" method="POST">
                        <table class="table table-bordered table-condensed table-striped" width="100%">
                            <tr>
                                <td width="15%">No. ID</td>
                                <td><input type="text"  name="id" class="span1" readonly="readonly" value="<?php echo $data['id']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Nama Bupati/Walikota</td>
                                <td><input type="text" id="nama_walikota" name="nama_walikota" class="span3" value="<?php echo $data['nama_walikota']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Nama Wakil</td>
                                <td><input type="text" name="nama_wakil" class="span3" value="<?php echo $data['nama_wakil']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Nama Ketua DPRD</td>
                                <td><input type="text" name="nama_dprd" class="span3" value="<?php echo $data['nama_dprd']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Partai Bupati/Walikota</td>
                                <td><input type="text" name="partai_walikota" class="span2" value="<?php echo $data['partai_walikota']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Partai Wakil</td>
                                <td><input type="text" name="partai_wakil" class="span2" value="<?php echo $data['partai_wakil']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Partai DPRD</td>
                                <td><input type="text" name="partai_dprd" class="span2" value="<?php echo $data['partai_dprd']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Nama Kab/Kota</td>
                                <td><input type="text" name="kota" class="span2" value="<?php echo $data['kota']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Jml Kecamatan</td>
                                <td><input type="text" name="jml_kecamatan" class="span1" value="<?php echo $data['jml_kecamatan']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Tahun Pilkada</td>
                                <td><input type="text" name="thn_pilkada" class="span1" value="<?php echo $data['thn_pilkada']; ?>"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input type="submit" name="save" class="btn" value="Save">
                                    <input type="hidden" name="action" class="btn" value="update">
                                    &nbsp;<a href="dpc.php" class="btn">Back</a>
                                </td>
                            </tr>
                        </table>    
                    </form>
                </div>
            </div>
            
        </div>
        <?php include "subviews/footer.php"; ?>
        
        <?php include "subviews/js.php"; ?>
    </body>
</html>