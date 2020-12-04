<?php
class Gra
{
    private $id;
    private $nazwa;
    private $cena;
    private $kategoriaId;
    public function __construct($id, $nazwa, $cena, $kategoriaId)
    {
        $this->id = $id;
        $this->nazwa = $nazwa;
        $this->cena = $cena;
        $this->kategoriaId = $kategoriaId;
    }
    public function getId()    {
        return $this->id;
    }
    public function setId($id)    {
        $this->id = $id;

    }

    public function getNazwa()    {
        return $this->nazwa;
    }

   
    public function setNazwa($nazwa)    {
        $this->nazwa = $nazwa;       
    }

   
    public function getCena()    {
        return $this->cena;
    }

  
    public function setCena($cena)    {
        $this->cena = $cena;       
    }

    public function getKategoriaId()    {
        return $this->kategoriaId;
    }

   
    public function setKategoriaId($kategoriaId)    {
        $this->kategoriaId = $kategoriaId;
    }
}
