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
                $("#no_ktp").focus();
            })
            
        </script>
    </head>
    
    <body>
        <?php include "subviews/menu_nav.php"; ?>
       
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <legend>PENGURUS - ADD&nbsp;
                        <a href="pengurus_add.php" class="btn"><i class="icon-plus"></i>&nbsp;Add</a>
                        <a href="pengurus.php" class="btn"><i class="icon-list-alt"></i>&nbsp;Pengurus</a>
                    </legend> 
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span4">&nbsp;</div>
                <div class="span4" style="text-align: center; margin-bottom: 5px;"><?php include "subviews/msg.php";?></div>
                <div class="span4">&nbsp;</div>
            </div>
            
            <div class="row-fluid">
                <div class="span12">
                    <form name="form1" id="form1" action="pengurus_proc.php" method="POST">
                        <table class="table table-bordered table-condensed table-striped" width="100%">
                            <tr>
                                <td>No. KTP</td>
                                <td><input type="text" id="no_ktp" name="no_ktp" class="span3"></td>
                            </tr>
                            <tr>
                                <td>No. KTA</td>
                                <td><input type="text" name="no_kta" class="span3"></td>
                            </tr>
                            <tr>
                                <td width="10%">Jenis</td>
                                <td><select name="jenis" class="span2">
                                        <option value="DPC">DPC</option>
                                        <option value="PAC">PAC</option>
                                        <option value="RANTING">Ranting</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td><input type="text" name="nama" class="span3"></td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td><select name="jabatan" class="span2">
                                        <option value="KETUA">Ketua</option>
                                        <option value="WAKIL KETUA">Wakil Ketua</option>
                                        <option value="SEKRETARIS">Sekretaris</option>
                                        <option value="WAKIL SEKRETARIS">Wakil Sekretaris</option>
                                        <option value="BENDAHARA">Bendahara</option>
                                        <option value="WAKIL BENDAHARA">Wakil Bendahara</option>
                                        <option value="">Kosong</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Tempat</td>
                                <td><input type="text" name="tempat" class="span2">
                                    <input type="text" name="tgl_lahir" class="span2" placeholder="01-05-1990"></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><textarea name="alamat" rows="2" class="span8"></textarea></td>
                            </tr>
                            <tr>
                                <td>Kab/Kota</td>
                                <td><input type="text" name="kota" class="span2"></td>
                            </tr>
                            <tr>
                                <td>Kecamatan</td>
                                <td><input type="text" name="kecamatan" class="span2"></td>
                            </tr>
                            <tr>
                                <td>Desa/Kel</td>
                                <td><input type="text" name="desa" class="span2"></td>
                            </tr>
                            <tr>
                                <td>No. Telp</td>
                                <td><input type="text" name="no_telp" class="span2"></td>
                            </tr>
                            <tr>
                                <td>No. HP</td>
                                <td><input type="text" name="no_hp" class="span2"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" class="span2"></td>
                            </tr>
                            <tr>
                                <td>Jumlah Anggota</td>
                                <td><input type="text" name="jml_anggota" class="span1"></td>
                            </tr>
                            <tr>
                                <td>No. Pemilih</td>
                                <td><input type="text" name="no_pemilih" class="span1"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input type="submit" name="save" class="btn" value="Save">
                                    <input type="hidden" name="action" class="btn" value="insert">
                                    &nbsp;<a href="pengurus.php" class="btn">Back</a>
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