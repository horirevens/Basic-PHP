<?php 

    $dir = "includes/uploads/"; 
    $target = $dir.basename( $_FILES['file']['name']);
    $size = basename($_FILES['file']['size']);
    $type = basename($_FILES['file']['type']);
    
    if ($size > 350000){
        echo "Your file is too large.<br>".$type."  "; 
        $ok=0;
    }elseif ($type == "text/php"){
        echo "No PHP files<br>";
        $ok=0;
    }elseif (!($type == "image/png")){
        echo "Harus PNG file<br>";
        $ok=0;
    }
    
    else{
        if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
            echo "The file ". basename( $_FILES['file']['name']). " has been uploaded";
        }else {
            echo "Sorry, there was a problem uploading your file.";
        }
    } 
    
 ?>