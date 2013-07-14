<?php include "libraries/referer.php"; ?>
<?php
    require_once "libraries/class_cropImage.php";
    $crop = new cropImage();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "subviews/meta.php"; ?>
        <?php include "subviews/css.php"; ?>
        
        <script src="includes/js/jquery.js"></script>
    </head>
    
    <body>
        <?php include "subviews/menu_nav.php"; ?>
        
        <div class="container-fluid">
            <div class="row-fluid"><br><br><br><br>
                <form id="form1" method="POST" enctype="multipart/form-data" action="upload_proc.php">
                    <p>Silahkan upload file</p>
                    <p>
                        <input type="file" name="file">
                        <input type="submit" value="Upload" class="btn">
                    </p>
                </form>
                
                <?php
                    //$src = "includes/uploads/kabah.jpg";
                    $crop->setImage($src);
                    $crop->createThumb();
                    $crop->renderImage();
                ?>
                <img src="thumbcreate.php?src=includes/uploads/kabah.jpg">
            </div>
            <br>
        </div>
        <?php include "subviews/footer.php"; ?>
        
        <?php include "subviews/js.php"; ?>
    </body>
</html>