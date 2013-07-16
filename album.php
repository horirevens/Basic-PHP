<?php include "libraries/referer.php"; ?>
<?php
    include "libraries/class_pagination.php";
    $pgn = new pagination();
    
    if(isset($_GET['search'])){
        $name = $_GET['name'];
    }elseif(isset($_GET['reset'])){
        $name = '';
    }else{
        $name = '';
    } 
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
            <div class="row-fluid">
                <legend>ALBUM - LIST&nbsp;
                    <a href="album_add.php" class="btn"><i class="icon-plus"></i>&nbsp;Add</a>
                    <a href="album.php" class="btn"><i class="icon-list-alt"></i>&nbsp;Album</a>
                    
                    <form class="pull-right" name="form1" act="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                        <input type="text" class="search-query span2" placeholder="Name" name="name" value="<?php if(isset($_GET['search'])){echo $name;} ?>">
                        <input type="submit" name="search" value="Search" class="btn">
                        <input type="submit" name="reset" value="Reset" class="btn">
                    </form>
                </legend>
            </div>
            
            <div class="row-fluid">
                <div class="span4">
                <?php
                    //PAGINATION
                    $pgn->sql_all = "SELECT * FROM album WHERE name LIKE '%$name%'";
                    $pgn->sql_param = "&name=$name";
                    $pgn->render();               
                ?>
                </div>
                <div class="span4" style="text-align: center; margin-top: 10px;"><?php include "subviews/msg.php";?></div>
                <div class="span4">&nbsp;</div>
            </div>
            
            <div class="row-fluid">   
                <ul class="thumbnails">
                    <?php
                        $sql = "SELECT * FROM album WHERE name LIKE '%$name%'
                                ORDER BY id LIMIT $pgn->start,$pgn->dataperpage";
                        $list = $db->fetcharray($sql);
                        foreach($list as $data){
                    ?>
                    <li style="width: 200px;">
                        <div class="thumbnail">
                            <?php
                                $sql2 = "SELECT *, id as P_id,name as P_name FROM photo WHERE album_id='".$data['id']."' ORDER BY id";
                                $list2 = $db->fetchdata($sql2);
                                
                                if($list2['album_id']!=$data['id']){
                            ?>
                            <a href="<?php echo 'photo.php?album='.$data['id'].''; ?>">
                                <img src="includes/uploads/img_thumbs/no_pic.png">
                            </a>
                            <?php }else{ ?>
                            <a href="<?php echo 'photo.php?album='.$data['id'].''; ?>">
                                <img src="<?php echo 'includes/uploads/img_thumbs/'.$list2['P_name'].''; ?>">
                            </a>
                            <?php } ?>
                            <h5><a href="<?php echo 'album_edit.php?id='.$data['id'].''; ?>"><?php echo $data['name']; ?></a></h5>
                            <p style="font-size: 11px;"><?php echo $data['description']; ?></p>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div> 
        </div>
        <?php include "subviews/footer.php"; ?>
        
        <?php include "subviews/js.php"; ?>
    </body>
</html>