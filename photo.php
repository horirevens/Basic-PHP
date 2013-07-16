<?php include "libraries/referer.php"; ?>
<?php
    include "libraries/class_pagination.php";
    $pgn = new pagination();  
    
    $album_id = $_GET['album'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "subviews/meta.php"; ?>
        <?php include "subviews/css.php"; ?>
        
        <script src="includes/js/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#myModal').modal({
                    keyboard: false,
                    show: false,
                    backdrop: false
                })
                $('#myModal').modal('hide')
            })
        </script>
    </head>
    
    <body>
        <?php include "subviews/menu_nav.php"; ?>
        
        <div class="container-fluid">
            <div class="row-fluid">
                <legend>PHOTO IN ALBUM - LIST&nbsp;
                    <a href="#myModal" class="btn" data-toggle="modal"><i class="icon-plus"></i>&nbsp;Add</a>
                    <a href="album.php" class="btn"><i class="icon-list-alt"></i>&nbsp;Album</a>
                </legend>
            </div>
            
            <div class="modal fade hide" id="myModal">
                <div class="modal-header">
                    <a class="close" data-dismiss="modal">×</a>
                    <h3>Upload new photo</h3>
                </div>
                <div class="modal-body">
                    <form id="form1" method="POST" enctype="multipart/form-data" action="photo_proc.php">
                    <p>
                        <input type="file" name="file">
                        <input type="hidden" name="album_id" value="<?php echo $album_id; ?>">
                        <input type="hidden" name="action" value="insert">
                        <input type="submit" value="Upload" class="btn">
                    </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <a data-dismiss="modal" class="btn">Close</a>
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span4">
                <?php
                    //PAGINATION
                    $pgn->sql_all = "SELECT * FROM photo WHERE album_id='$album_id'";
                    $pgn->render();               
                ?>
                </div>
                <div class="span4" style="text-align: center; margin-top: 10px;"><?php include "subviews/msg.php";?></div>
                <div class="span4">&nbsp;</div>
            </div>
            
            <div class="row-fluid">   
                <ul class="thumbnails">
                    <?php
                        $sql = "SELECT * FROM photo WHERE album_id='$album_id'
                                ORDER BY id LIMIT $pgn->start,$pgn->dataperpage";
                        $list = $db->fetcharray($sql);
                        foreach($list as $data){
                    ?>
                    <li style="width: 200px;">
                        <div class="cst_thumbnail">
                            <img src="<?php echo 'includes/uploads/img_thumbs/'.$data['name'].''; ?>">
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>    
              
            <div class="row-fluid">
                
            </div>
            <br>
        </div>
        <?php include "subviews/footer.php"; ?>
        
        <?php include "subviews/js.php"; ?>
    </body>
</html><?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
