<?php
function generTab($rows,$cols){
    $html = "<table>\n";
    for($i=1; $i<=$rows; $i++){
        $html .= "<tr>\n";
        for($j=1;$j<=$cols;$j++){
            $html .= "<td>".($i*$j)."</td>\n";
        }
        $html .= "</tr>\n";
    }
    return $html."</table>\n";
}