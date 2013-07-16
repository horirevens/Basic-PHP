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
            })
            
        </script>
    </head>
    
    <body>
        <?php include "subviews/menu_nav.php"; ?>
       
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <legend>ALBUM - ADD&nbsp;
                        <a href="album_add.php" class="btn"><i class="icon-plus"></i>&nbsp;Add</a>
                        <a href="album.php" class="btn"><i class="icon-list-alt"></i>&nbsp;User</a>
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
                $sql = "SELECT * FROM album WHERE id='$id'";
                $data = $db->fetchdata($sql);
            ?>
            
            <div class="row-fluid">
                <div class="span12">
                    <form name="form1" id="form1" action="album_proc.php" method="POST">
                        <table class="table table-bordered table-condensed table-striped" width="100%">
                            <tr>
                                <td>ID</td>
                                <td><input type="text" name="id" class="span2" readonly="readonly" value="<?php echo $data['id']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td><input type="text" name="name" class="span5 validate[required,custom[onlyLetterSp]]" value="<?php echo $data['name']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td><textarea name="description" class="span8 validate[maxSize[33]]" rows="2"><?php echo $data['description']; ?></textarea></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input type="submit" name="save" class="btn" value="Save">
                                    <input type="hidden" name="action" class="btn" value="update">
                                    &nbsp;<a href="album.php" class="btn">Back</a>
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