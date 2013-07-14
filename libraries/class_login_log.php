<?php

require_once "koneksi.php";

class login_log {
    function __construct() {
    }
    
    function create_log($status,$menu){
        $sql_login = mysql_query("SELECT id FROM login_user WHERE username='".$_SESSION['username']."'");
        //$data_login = $this->data($sql_login);
        $data_login = mysql_fetch_array($sql_login);
        $user = $data_login['id'];
        
        $date_time = date('Y-m-d H:i:s');
        $sql = mysql_query("INSERT INTO login_log (date_time, login_user_id, status, menu) 
                VALUES('$date_time','$user','$status','$menu')");
        //$this->query($sql);
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
