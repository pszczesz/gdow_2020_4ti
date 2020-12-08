<?php
require_once "models/Kategoria.php";
class KategorieToHTML{
    public static function katToList($kat,$katId=-1):string{
        $html = " <ul class=\"list-group-horizontal\" style='list-style:none;'>";
        foreach($kat as $k){
            $border = $k->getId()==$katId ? "style='border: solid black 1px;'" : "";
            $html .= "<li ><a class='btn btn-light p-3 m-2 d-inline-block w-100' href='cw23_1.php?id={$k->getId()}' {$border}>{$k->getNazwa()} opis: {$k->getOpis()}</a></li>\n";
        }

        return $html."</ul>";
    }
    public static function KatToOption(array $kats):string{
        $html = "";
        foreach($kats as $k){
            $html .= "<option value='{$k->getId()}'>{$k->getNazwa()}</option>";
        }
        return $html;
    }
}