<?php

$page = $_REQUEST['page'];

if($page=='logout'){
    if(file_exists("logout.php")){
        header("Location: logout.php");
        exit();
    }
}elseif($page=='user'){
    if(file_exists("user.php")){
        header("Location: user.php");
        exit();
    }
}else{
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
