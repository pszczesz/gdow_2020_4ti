<?php
function getFromFile($filname){
    $dane = [];
    $f = fopen($filname,'r');
    if($f){
        $text="";
        while($line = fgets($f)){           
            if(strpos($line,"===")===0){                
                $dane[] = $text;
                $text = "";
            }else{
                //echo "tekst: {$text} <br>line {$line}<br>\n";
                $text .= $line." ";
            }
        }
    }
    fclose($f);
    return $dane;
}
function toList(array $dane){
    $html = "<ul>\n";
    foreach($dane as $line){
        $html .= "<li>{$line}</li>";
    }
    return $html."</ul>";
}