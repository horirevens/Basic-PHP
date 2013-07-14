<?php include "libraries/referer.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "subviews/meta.php"; ?>
        
        <script src="includes/js/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.dropdown-toggle').dropdown()
            })
            
        </script>
        
        <?php include "subviews/css.php"; ?>
    </head>
    
    <body>
        <?php include "subviews/menu_nav.php"; ?>
        
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="hero-unit" style="margin-top: 1em; margin-bottom: 1em; text-align: center; height: 300px;">
                    <h2>
                        Selamat Datang di Aplikasi Dasar PHP :)
                    </h2>
                    
                </div>    
            </div>
        </div>
        
        <?php include "subviews/footer.php"; ?>
        
        <?php include "subviews/js.php"; ?>
    </body>
</html>