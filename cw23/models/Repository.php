<?php
require_once "Gra.php";
require_once "Kategoria.php";
class Repository{
    public $gry = [];
    public $kategorie = [];
    public function getAllGry():array{
        $conn = $this->getConnection();
        if($conn==null) return [];
        $sql = "SELECT * FROM gry";
        $result = $conn->query($sql);
        $gry = [];
        while($row = $result->fetch_row()){
            $gry[] = new Gra($row[0],$row[1],$row[2],$row[3]);
        }
        $conn->close();
        return $gry;
    }
    private function getConnection():mysqli{
        $conn = new mysqli("localhost","root",null,"gdow_cw23");
        if($conn->connect_errno!=0) return null;
        $conn->query("SET NAMES utf8");
        return $conn;
    }
    public function getAllKategorie():array{
        $conn = $this->getConnection();
        if($conn==null) return [];
        $sql = "SELECT * FROM kategorie";
        $result = $conn->query($sql);
        $kategorie = [];
        while($row = $result->fetch_row()){
            $kategorie[] = new Kategoria($row[0],$row[1],$row[2]);
        }
        $conn->close();
        return $kategorie;
    }
}