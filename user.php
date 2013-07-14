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
        <script type="text/javascript">
            $(document).ready(function(){
                $('.dropdown-toggle').dropdown()
            })
            
        </script>
    </head>
    
    <body>
        <?php include "subviews/menu_nav.php"; ?>
        
        <div class="container-fluid">
            <div class="row-fluid">
                <legend>USER - LIST&nbsp;
                    <a href="user_add.php" class="btn"><i class="icon-plus"></i>&nbsp;Add</a>
                    <a href="user.php" class="btn"><i class="icon-list-alt"></i>&nbsp;User</a>
                    
                    <form class="pull-right" name="form1" act="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                        <input type="text" class="search-query span2" placeholder="Name" name="name" value="<?php if(isset($_GET['search'])){echo $name;} ?>">
                        <input type="submit" name="search" value="Search" class="btn">
                        <input type="submit" name="reset" value="Reset" class="btn">
                    </form>
                </legend>
                
                <div class="row-fluid">
                    <div class="span4">
                    <?php
                        //PAGINATION
                        $pgn->sql_all = "SELECT * FROM user WHERE name LIKE '%$name%'";
                        $pgn->sql_param = "&name=$name";
                        $pgn->render();               
                    ?>
                    </div>
                    <div class="span4" style="text-align: center; margin-top: 10px;"><?php include "subviews/msg.php";?></div>
                    <div class="span4">&nbsp;</div>
                </div>
                
                <table class="table table-bordered table-condensed table-striped" width="100%">
                    <tr>
                        <th width="8%" style="text-align: center;">No. ID</th>
                        <th width="15%" style="text-align: center;">Name</th>
                        <th width="30%" style="text-align: center;">Address</th>
                        <th width="5%" style="text-align: center;">Gender</th>
                        <th width="8%" style="text-align: center;">DOB</th>
                        <th width="5%" style="text-align: center;">Active</th>
                        <th width="10%" style="text-align: center;">Creator</th>
                        <th width="10%" style="text-align: center;">Action</th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM user WHERE name LIKE '%$name%'
                                ORDER BY id LIMIT $pgn->start,$pgn->dataperpage";
                        $list = $db->fetcharray($sql);
                        foreach($list as $data){
                    ?>
                    
                    <tr> 
                        <td style="text-align: center;"><?php echo $data['id']; ?></td>
                        <td style="text-align: center;"><?php echo $data['name']; ?></td>
                        <td style="text-align: center;"><?php echo $data['address']; ?></td>
                        <td style="text-align: center;"><?php echo $data['gender']; ?></td>
                        <td style="text-align: center;"><?php echo $data['dob']; ?></td>
                        <td style="text-align: center;">
                            <?php 
                            if($data['active']=='1'){
                                echo "<i class='icon-ok-sign'></i>";
                            } else {
                                echo "<i class='icon-minus-sign'></i>";
                            }
                            ?>
                        </td>
                        <td style="text-align: center;"><?php echo $data['creator']; ?></td>
                        <td style="text-align: center;">
                            <a href="<?php echo 'user_edit.php?id='.$data['id'];'' ?>">Edit</a>
                            &nbsp;|&nbsp;
                            <a href="<?php echo 'user.php?id='.$data['id'].'&act=delete' ?>" 
                               onclick="return confirm('Anda yakin ingin menghapus data?');">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                
                <?php
                    if($_GET['act'] == 'delete'){
                        $id = $_GET['id'];
                        $sql_del = "DELETE FROM user WHERE id='$id'";
                        
                        if(!$db->query($sql_del)){
                           die($sql_del); 
                        }else{
                            print("
                                <script languange=\"javascript\">
                                        window.location = 'user.php';
                                </script>
                            ");    
                        } 
                    }
                ?>
            </div>
            <br>
        </div>
        <?php include "subviews/footer.php"; ?>
        
        <?php include "subviews/js.php"; ?>
    </body>
</html>