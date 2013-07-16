<?php

class custom extends database{
    
    function dateToEnglish($date){ //2013-06-08 => 08th June 2013
        $year = substr($date,0,4); //2013
        $month = substr($date,5,2); //06
        $day = substr($date,8,2); //08
        $day2 = substr($date,9,2); //8
        switch($month){
            case "01": $month="January"; break;
            case "02": $month="February"; break;
            case "03": $month="March"; break;
            case "04": $month="April"; break;
            case "05": $month="May"; break;
            case "06": $month="June"; break;
            case "07": $month="July"; break;
            case "08": $month="August"; break;
            case "09": $month="September"; break;
            case "10": $month="October"; break;
            case "11": $month="November"; break;
            case "12": $month="December"; break;
        }
        if($day=="01"){ $day="1st";}
        elseif($day=="02"){ $day="2nd";}
        elseif($day=="03"){ $day="3rd";}
        elseif(($day=="04")||($day=="05")||($day=="06")||($day=="07")||($day=="08")||($day=="09")){ $day=$day2."th";}
        else{ $day=$day."th";}
        $ubah = "$day $month $year";
        return $ubah;
    }
    
    function dateToIndo($date){ //2013-06-08 => 08 Juni 2013
        $year = substr($date,0,4); //2013
        $month = substr($date,5,2); //06
        $day = substr($date,8,2); //08
        switch($month){
            case "01": $month="Januari"; break;
            case "02": $month="Februari"; break;
            case "03": $month="Maret"; break;
            case "04": $month="April"; break;
            case "05": $month="Mei"; break;
            case "06": $month="Juni"; break;
            case "07": $month="Juli"; break;
            case "08": $month="Augustus"; break;
            case "09": $month="September"; break;
            case "10": $month="Oktober"; break;
            case "11": $month="November"; break;
            case "12": $month="Desember"; break;
        }
        $ubah = "$day $month $year";
        return $ubah;
    }
    
    function dateIndoMinus($date){ //2013-06-08 => 08-06-2013
        $year = substr($date,0,4); //2013
        $month = substr($date,5,2); //06
        $day = substr($date,8,2); //08
        $ubah = "$day-$month-$year";
        return $ubah;
    }
    
    function dateEnglishMinus($date){ //2013-06-08 => 2013-06-08
        $year = substr($date,6,4); //2013
        $month = substr($date,3,2); //06
        $day = substr($date,0,2); //08
        $ubah = "$year-$month-$day";
        return $ubah;
    }
    
    function dateIndoSlash($date){ //2013-06-08 => 08/06/2013
        $year = substr($date,0,4); //2013
        $month = substr($date,5,2); //06
        $day = substr($date,8,2); //08
        $ubah = "$day/$month/$year";
        return $ubah;
    }
    
    function dateEnglishSlash($date){ //2013-06-08 => 2013/06/08
        $year = substr($date,0,4); //2013
        $month = substr($date,5,2); //06
        $day = substr($date,8,2); //08
        $ubah = "$year/$month/$day";
        return $ubah;
    }
    
    function numberIndo($nominal){ //1000 => 1.000
        $panjang = strlen($nominal); //1000 = 4
        switch($panjang){
            case 1: $satuan = substr($nominal,0,1); //1
                    $hasil = $satuan; break;
            case 2: $puluhan = substr($nominal,0,2); //10
                    $hasil = $puluhan; break;
            case 3: $ratusan = substr($nominal,0,3); //100
                    $hasil = $ratusan; break;
            case 4: $ribuan = substr($nominal,0,1);$ratusan = substr($nominal,0,3); //1.000
                    $hasil = $ribuan.".".$ratusan; break;
            case 5: $ribuan = substr($nominal,0,2);$ratusan = substr($nominal,2,3); //10.000
                    $hasil = $ribuan.".".$ratusan; break;
            case 6: $ribuan = substr($nominal,0,3);$ratusan = substr($nominal,3,3); //100.000
                    $hasil = $ribuan.".".$ratusan; break;
            case 7: $jutaan = substr($nominal,0,1);$ribuan = substr($nominal,1,3);$ratusan = substr($nominal,4,3); 
                    $hasil = $jutaan.".".$ribuan.".".$ratusan; break; //1.000.000
            case 8: $jutaan = substr($nominal,0,2);$ribuan = substr($nominal,2,3);$ratusan = substr($nominal,5,3); 
                    $hasil = $jutaan.".".$ribuan.".".$ratusan; break; //10.000.000
            case 9: $jutaan = substr($nominal,0,3);$ribuan = substr($nominal,3,3);$ratusan = substr($nominal,6,3); 
                    $hasil = $jutaan.".".$ribuan.".".$ratusan; break; //100.000.000
            case 10: $milyar = substr($nominal,0,1);$jutaan = substr($nominal,1,3);
                     $ribuan = substr($nominal,4,3);$ratusan = substr($nominal,7,3); 
                     $hasil = $milyar.".".$jutaan.".".$ribuan.".".$ratusan; break; //1.000.000.000
            case 11: $milyar = substr($nominal,0,2);$jutaan = substr($nominal,2,3);
                     $ribuan = substr($nominal,5,3);$ratusan = substr($nominal,8,3); 
                     $hasil = $milyar.".".$jutaan.".".$ribuan.".".$ratusan; break; //10.000.000.000
            case 12: $milyar = substr($nominal,0,3);$jutaan = substr($nominal,3,3);
                     $ribuan = substr($nominal,6,3);$ratusan = substr($nominal,9,3); 
                     $hasil = $milyar.".".$jutaan.".".$ribuan.".".$ratusan; break; //100.000.000.000 
            case 13: $triliyun = substr($nominal,0,1);$milyar = substr($nominal,1,3);$jutaan = substr($nominal,4,3);
                     $ribuan = substr($nominal,7,3);$ratusan = substr($nominal,10,3); 
                     $hasil = $$triliyun.".".$milyar.".".$jutaan.".".$ribuan.".".$ratusan; break; //1.000.000.000.000 
            case 14: $triliyun = substr($nominal,0,2);$milyar = substr($nominal,2,3);$jutaan = substr($nominal,5,3);
                     $ribuan = substr($nominal,8,3);$ratusan = substr($nominal,11,3); 
                     $hasil = $$triliyun.".".$milyar.".".$jutaan.".".$ribuan.".".$ratusan; break; //10.000.000.000.000  
        }
        return $hasil;
    }
    
    function numberIndoDecimal($nominal,$decimal){ //angka=10000, desimal=2 => 10.000,00
        $hasil = number_format($nominal, $decimal,',','.');
        return $hasil;
    }
    
    function autoId($kode,$table){
        $sql = "SELECT MAX(SUBSTR(id,3)) AS last FROM $table WHERE id LIKE '%$kode%'";
        
        $data = $this->fetchdata($sql);
        $lastNoId = $data['last'];
        
        if($lastNoId==NULL){
            $nextNoUrut = "001";
        }else{
            $lastNoUrut = ltrim($lastNoId,'0');
            $nextNoUrut = $lastNoUrut+1;
            if($nextNoUrut < 10) $nextNoUrut = '0'.$nextNoUrut;
            if($nextNoUrut < 100) $nextNoUrut = '0'.$nextNoUrut;   
        }
        $nextNoId = $kode.$nextNoUrut;
        return $nextNoId;
    }
    
    function selectIconGlyph(){
        echo "<option value='icon-user'>Icon User</option>";
        echo "<option value='icon-star'>Icon Star</option>";
        echo "<option value='icon-off'>Icon Off</option>";
        echo "<option value='icon-cog'>Icon Cog</option>";
        echo "<option value='icon-home'>Icon Home</option>";
        echo "<option value='icon-file'>Icon File</option>";
        echo "<option value='icon-list'>Icon List</option>";
        echo "<option value='icon-barcode'>Icon Barcode</option>";
        echo "<option value='icon-qrcode'>Icon QRcode</option>";
        echo "<option value='icon-shopping-cart'>Icon Cart</option>";
        echo "<option value='icon-arrow-right'>Icon Arrow Right</option>";
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
