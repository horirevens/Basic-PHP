<?php

class upload{
    public $dst_full = "includes/uploads/img_fulls/";
    public $dst_thumb = "includes/uploads/img_thumbs/";
    public $width = 200; 
    
    function createThumbnail($filename) {  
      
        if(preg_match('/[.](jpg)$/', $filename)) {  
            $im = imagecreatefromjpeg($this->dst_full . $filename);  
        } else if (preg_match('/[.](gif)$/', $filename)) {  
            $im = imagecreatefromgif($this->dst_full . $filename);  
        } else if (preg_match('/[.](png)$/', $filename)) {  
            $im = imagecreatefrompng($this->dst_full . $filename);  
        }  

        $ox = imagesx($im);  
        $oy = imagesy($im);  

        $nx = $this->width;  
        $ny = floor($oy * ($this->width / $ox));  

        $nm = imagecreatetruecolor($nx, $ny);  

        imagecopyresized($nm, $im, 0,0,0,0,$nx,$ny,$ox,$oy);  

        if(!file_exists($this->dst_thumb)) {  
            if(!mkdir($this->dst_thumb)) {  
                die("There was a problem. Please try again!");  
            }   
        }  
        
        // save image thumb
        imagejpeg($nm, $this->dst_thumb . $filename); 
    }  
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
