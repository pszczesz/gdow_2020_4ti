<?php
function getUsers(){
    return [
        ["user1","admin"],
        ["user2","advanced admin"],
        ["user3","admin"],
        ["user4","none"],
        ["user5","admin"],
    ];
}

function getProducts(){
    return [
        "masło" => 4.99,
        "bułka" => 3.99,
        "mąka" => 3.90,
        "wędlina" => 7.90,
        "mięso" => 6.90,
    ];
}
function toTable(array $dane){
    $html = "<table>";
    $html .= "<tr><th>Lp</th><th>Nazwa</th><th>cena</th></tr>\n";
    $i=0;
    $suma = 0;
    foreach($dane as $nazwa=>$cena){
        $html .= "<tr><td>".(++$i)."</td><td>{$nazwa}</td><td class='right'>{$cena}</td></tr>\n";
        $suma += $cena;
    } 
    $html .= "<tr class='bold'><td colspan='2'>Razem</td><td class='right'>{$suma}</td></tr>\n" ;  
    $html .= "</table>";
    return $html;
}