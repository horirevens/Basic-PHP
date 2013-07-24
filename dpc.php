<?php include "libraries/referer.php"; ?>
<?php
    include "libraries/class_pagination.php";
    $pgn = new pagination();
    
//    if(isset($_GET['search'])){
//        $name = $_GET['name'];
//    }elseif(isset($_GET['reset'])){
//        $name = '';
//    }else{
//        $name = '';
//    } 
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
                <legend>DPC - LIST&nbsp;
                    <a href="dpc_add.php" class="btn"><i class="icon-plus"></i>&nbsp;Add</a>
                    <a href="dpc.php" class="btn"><i class="icon-list-alt"></i>&nbsp;Data</a>
                    
<!--                    <form class="pull-right" name="form1" act="<?php //echo $_SERVER['PHP_SELF']; ?>" method="GET">
                        <input type="text" class="search-query span2" placeholder="Name" name="name" value="<?php if(isset($_GET['search'])){echo $name;} ?>">
                        <input type="submit" name="search" value="Search" class="btn">
                        <input type="submit" name="reset" value="Reset" class="btn">
                    </form>-->
                </legend>
            </div>
            
            <div class="row-fluid">
                <div class="span4">
                <?php
                    //PAGINATION
                    $pgn->sql_all = "SELECT * FROM gerindra_dpc";
                    //$pgn->sql_param = "&nama=$name";
                    $pgn->render();               
                ?>
                </div>
                <div class="span4" style="text-align: center; margin-top: 10px;"><?php include "subviews/msg.php";?></div>
                <div class="span4">&nbsp;</div>
            </div>
              
            <div class="row-fluid">
                <table class="table table-bordered table-condensed table-striped" width="100%">
                    <tr>
                        <th width="3%" style="text-align: center;">No.</th>
                        <th width="10%" style="text-align: center;">Bupati</th>
                        <th width="10%" style="text-align: center;">Wakil</th>
                        <th width="10%" style="text-align: center;">Ketua DPRD</th>
                        <th width="10%" style="text-align: center;">Partai Bupati</th>
                        <th width="10%" style="text-align: center;">Partai Wakil</th>
                        <th width="10%" style="text-align: center;">Partai DPRD</th>
                        <th width="10%" style="text-align: center;">Tahun</th>
                        <th width="10%" style="text-align: center;">Action</th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM gerindra_dpc
                                ORDER BY id LIMIT $pgn->start,$pgn->dataperpage";
                        $list = $db->fetcharray($sql);
                        $i = 0;
                        foreach($list as $data){
                            $i++;
                    ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $i; ?></td>
                        <td style="text-align: center;">
                            <a href="<?php echo 'dpc_edit.php?id='.$data['id'];'' ?>"><?php echo $data['nama_walikota']; ?></a>
                        </td>
                        <td style="text-align: center;"><?php echo $data['nama_wakil']; ?></td>
                        <td style="text-align: center;"><?php echo $data['nama_dprd']; ?></td>
                        <td style="text-align: center;"><?php echo $data['partai_walikota']; ?></td>
                        <td style="text-align: center;"><?php echo $data['partai_wakil']; ?></td>
                        <td style="text-align: center;"><?php echo $data['partai_dprd']; ?></td>
                        <td style="text-align: center;"><?php echo $data['thn_pilkada']; ?></td>
                        <td style="text-align: center;">
                            <a href="<?php echo 'dpc_edit.php?id='.$data['id'].''; ?>">Edit</a>
                            &nbsp;|&nbsp;
                            <a href="<?php echo 'dpc_print.php?id='.$data['id'].''; ?>">Print</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <br>
        </div>
        <?php include "subviews/footer.php"; ?>
        
        <?php include "subviews/js.php"; ?>
    </body>
</html>