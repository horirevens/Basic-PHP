<?php

require_once "class_db.php";

class pagination extends database{
    private $show_page;
    public $dataperpage;
    public $start;
    public $sql_all;
    public $sql_param;
    public $sql_order;
    public $sql_order_default;
    
    function __construct() {
        $this->dataperpage = 15;
        $this->show_page = 5;
    }
    
    function render(){
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            if($page<1){
                $page = 1;
            }
        } else {
            $page = 1;
        }
        
        $jml_all = $this->numrows($this->sql_all);
        $jml_page = ceil($jml_all/$this->dataperpage);
        if($page>$jml_page){
            $page = $page-1;
        }
        $this->start = ($page-1)*$this->dataperpage;
        $next = $page+1;
        $prev = $page-1;
        
        echo "<div class='pagination'>";
            echo "<ul>";
                $hal = floor($this->show_page/2);
                $hal_start = $page-$hal;
                if($hal_start<=0){
                    $hal_start = 1;
                }
                $hal_end = $hal_start+$this->show_page;
                if($hal_end>$jml_page){
                    $hal_start = $jml_page-$this->show_page;
                }
                
                echo "<li><a href='".$_SERVER['PHP_SELF']."?page=1&cari=cari".$this->sql_param."'>First</a></li>";
                echo "<li><a href='".$_SERVER['PHP_SELF']."?page=$prev&cari=cari".$this->sql_param."'>Prev</a></li>";
                for($n=1;$n<=$jml_page;$n++){
                    if(($n>=$hal_start)&&($n<=$hal_end)){
                        if($n==$page){
                            echo "<li class='active'><a href='".$_SERVER['PHP_SELF']."?page=$n&cari=cari".$this->sql_param."'>".$n."</a></li>";
                        } else {
                            echo "<li><a href='".$_SERVER['PHP_SELF']."?page=$n&cari=cari".$this->sql_param."'>".$n."</a></li>";
                        }
                    }
                }
                echo "<li><a href='".$_SERVER['PHP_SELF']."?page=$next&cari=cari".$this->sql_param."'>Next</a></li>";
                echo "<li><a href='".$_SERVER['PHP_SELF']."?page=$jml_page&cari=cari".$this->sql_param."'>Last</a></li>";
           echo "</ul>";
        echo "</div>";
    }
}

/*require_once 'koneksi.php';

class pagination{
    private $show_page;
    public $dataperpage;
    public $start;
    public $sql_all;
    public $sql_param;
    
    function __construct() {
        $this->dataperpage = 15;
        $this->show_page = 5;
    }
    
    function render(){
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            if($page<1){
                $page = 1;
            }
        }else{
            $page = 1;
        }
        
         $res_all = $this->sql_all;
         $jml_all = mysql_num_rows($res_all);
         
         $jml_page = ceil($jml_all/$this->dataperpage);
         if($page>$jml_page){
             $page = $page-1;
         }
         
         $this->start = ($page-1)*$this->dataperpage;
         $next = $page+1;
         $prev = $page-1;
         
         echo "<div class='pagination'>";
            echo "<ul>";
                $hal = floor($this->show_page/2);
                $hal_start = $page-$hal;
                if($hal_start<=0){
                    $hal_start = 1;
                }
                $hal_end = $hal_start+$this->show_page;
                if($hal_end>$jml_page){
                    $hal_start = $jml_page-$this->show_page;
                }
                
                echo "<li><a href='".$_SERVER['PHP_SELF']."?page=1&cari=cari".$this->sql_param."'>First</a></li>";
                echo "<li><a href='".$_SERVER['PHP_SELF']."?page=$prev&cari=cari".$this->sql_param."'>Prev</a></li>";
                for($n=1; $n<=$jml_page; $n++){
                    if(($n>=$hal_start) && ($n<=$hal_end)){
                        if($n==$page){
                            echo "<li class='active'><a href='".$_SERVER['PHP_SELF']."?page=$n&cari=cari".$this->sql_param."'>".$n."</a></li>";
                        }else{
                            echo "<li><a href='".$_SERVER['PHP_SELF']."?page=$n&cari=cari".$this->sql_param."'>".$n."</a></li>";
                        }
                    }
                }
                echo "<li><a href='".$_SERVER['PHP_SELF']."?page=$next&cari=cari".$this->sql_param."'>Next</a></li>";
                echo "<li><a href='".$_SERVER['PHP_SELF']."?page=$jml_page&cari=cari".$this->sql_param."'>Last</a></li>";
            echo "</ul>";
        echo "</div>";
    }

}*/

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
