<?php
require_once "models/Gra.php";
class GryToHTML{
    public static function GryToTable(array $gry):string{
        $html = "<table class='table table-full'>";
        $html .= "<tr><th>Lp</th><th>Nazwa</th><th>Cena</th></tr>";
        $lp = 0;
        foreach($gry as $gra){
            $lp++;
            $html .= "<tr><td>{$lp}</td><td>{$gra->getNazwa()}</td>"
            ."<td class='right'>{$gra->getCena()} zł</td></tr>\n";            
        }
        $html .= "</table>";
        return $html;
    }
    public static function GryToTableWithKat(array $gry):string{
        $html = "<table class='table table-full'>";
        $html .= "<tr><th>Lp</th><th>Nazwa</th><th>Cena</th><th>Kategoria</th></tr>";
        $lp = 0;
        foreach($gry as $gra){
            $lp++;
            $html .= "<tr><td>{$lp}</td><td>{$gra->getNazwa()}</td>"
            ."<td class='right'>{$gra->getCena()} zł</td><td>{$gra->getKategoria()->getNazwa()}</td></tr>\n";            
        }
        $html .= "</table>";
        return $html;
    }
}