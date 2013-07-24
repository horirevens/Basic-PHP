<?php include "libraries/referer.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "subviews/meta.php"; ?>
        <?php include "subviews/css.php"; ?>
        <script src="includes/js/jquery.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $('#form1').validationEngine();
                $("#dob").datepicker({
                    dateFormat: 'yy/mm/dd',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '1940:2030'
                });
                //$("#kecamatan").focus();
            })
            
        </script>
    </head>
    
    <body>
        <?php include "subviews/menu_nav.php"; ?>
       
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <legend>PAC - ADD&nbsp;
                        <a href="pac_add.php" class="btn"><i class="icon-plus"></i>&nbsp;Add</a>
                        <a href="pac.php" class="btn"><i class="icon-list-alt"></i>&nbsp;PAC</a>
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
                $sql = "SELECT * FROM gerindra_pac WHERE id='$id'";
                $data = $db->fetchdata($sql);
            ?>
            
            <div class="row-fluid">
                <div class="span12">
                    <form name="form1" id="form1" action="pac_proc.php" method="POST">
                        <table class="table table-bordered table-condensed table-striped" width="100%">
                            <tr>
                                <td width="15%">No. ID</td>
                                <td><input type="text"  name="id" class="span1" readonly="readonly" value="<?php echo $data['id']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Kecamatan</td>
                                <td><input type="text" id="kecamatan" name="kecamatan" class="span2" value="<?php echo $data['kecamatan']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Jumlah Desa</td>
                                <td><input type="text" name="jml_desa" class="span1" value="<?php echo $data['jml_desa']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Jumlah Kelurahan</td>
                                <td><input type="text" name="jml_kelurahan" class="span1" value="<?php echo $data['jml_kelurahan']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Jumlah Ranting</td>
                                <td><input type="text" name="jml_ranting" class="span1" value="<?php echo $data['jml_ranting']; ?>"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input type="submit" name="save" class="btn" value="Save">
                                    <input type="hidden" name="action" class="btn" value="update">
                                    &nbsp;<a href="pac.php" class="btn">Back</a>
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