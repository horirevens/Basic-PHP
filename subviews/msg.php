<?php
if(isset($_SESSION['warning'])){
    if($_SESSION['warning'] != ''){
?>
    <span class="label label-important span4">
        <?php 
            echo $_SESSION['warning'];
            $_SESSION['warning'] = '';
        ?>
    </span>
<?php
    }
}

if(isset($_SESSION['notif'])){
    if($_SESSION['notif'] != ''){
?>
    <span class="label label-info span4">
        <?php 
            echo $_SESSION['notif'];
            $_SESSION['notif'] = '';
        ?>
    </span>
<?php
    }
}

if(isset($_SESSION['success'])){
    if($_SESSION['success'] != ''){
?>
    <span class="label label-success span4">
        <?php 
            echo $_SESSION['success'];
            $_SESSION['success'] = '';
        ?>
    </span>
<?php } } ?>

