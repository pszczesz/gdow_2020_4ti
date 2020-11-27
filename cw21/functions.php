<?php
function insertChar($text, $char)
{
    $wynik = "";
    $wyrazy = explode(" ", $text);
    foreach ($wyrazy as $w) {
        $length = mb_strlen($w);
        for ($i = 0; $i < $length - 1; $i++) {
            $wynik .= mb_substr($w, $i, 1) . $char;
        }
        $wynik .= mb_substr($w, -1).' ';
    }

    return $wynik;
}
function reverse($text){
    $wynik = "";
    $length = mb_strlen($text);
    for($i=0;$i<$length;$i++){
        $wynik.=mb_substr($text,-($i+1),1);
    }
    return $wynik;
}
function countAlpha($t){
    $znakiPL = "ąęłóńćźż";
    $wynik = 0;
    $length = mb_strlen($t);
    for($i=0;$i<$length;$i++){
        $alpha = mb_strtolower(mb_substr($t,$i,1));
        if($alpha>='a' && $alpha<='z' || mb_strpos($znakiPL,$alpha)){
            $wynik++;
        }
    }
    return $wynik;
}
