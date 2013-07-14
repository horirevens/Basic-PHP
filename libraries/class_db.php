<?php

class database{
    private $con;
    private $host = "localhost";
    private $username = "hori";
    private $password = "hori1234";
    private $database = "db_php";
    
    function __construct() {
        $this->start_con();
    }
    
    function start_con(){ //buka koneksi
        if(!$this->con = mysql_connect($this->host, $this->username, $this->password)){
            die("Cannot connect to mysql server local");
        }
    }
    
    function close_con(){ //tutup koneksi
        return mysql_close($this->con);
    }
    
    function query($sql){ //eksekusi perintah query
        if(!$this->con = mysql_connect($this->host, $this->username, $this->password)){
            die("Cannot connect to mysql server local");
        }
        mysql_select_db($this->database);
        return mysql_query($sql);
    }
    
    function numrows($sql){ //tampilkan jumlah data
        if($result = $this->query($sql)){
            $record = mysql_num_rows($result);
        }else{
            $record = 0;
        }
        return $record;
    }
    
    function fetchdata($sql){
        $data = array();
        if($result = $this->query($sql)){
            $data = mysql_fetch_array($result, MYSQL_BOTH);
        }
        return $data;
    }
    
    function fetcharray($sql){
        $result2 = array();
        if($result = $this->query($sql)){
            while($data = mysql_fetch_array($result)){
                $result2[] = $data;
            }
        }
        return $result2;
    }
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
