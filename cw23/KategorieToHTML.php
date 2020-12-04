<?php
require_once "models/Kategoria.php";
class KategorieToHTML{
    public static function katToList($kat):string{
        $html = " <ul class=\"list-group-horizontal\" style='list-style:none;'>";
        foreach($kat as $k){
            $html .= "<li><a class='btn btn-light p-3 m-2' href='cw23_1.php?id={$k->getId()}'>{$k->getNazwa()} opis: {$k->getOpis()}</a></li>\n";
        }

        return $html."</ul>";
    }
}