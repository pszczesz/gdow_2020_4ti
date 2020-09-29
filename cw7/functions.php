<?php
function Lista(array $dane, $typ='ol'){
        $html = "<{$typ}>\n";
        foreach($dane as $wiersz){
            $html .= "<li>{$wiersz}</li>\n";
        }
        $html .= "</{$typ}>\n";
        return $html;
}
function Colors(array $colors){
    $html = "<select id='colors'>\n";
    foreach($colors as $color){
        $html .= "<option value='{$color}'>{$color}</option>\n";
    }
    $html .= "</select>\n";
    return $html;
}