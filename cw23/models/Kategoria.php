<?php
class Kategoria{
    private $id;
    private string $nazwa;
    private string $opis;
    public function __construct($id,$nazwa,$opis)
    {
        $this->id = $id;
        $this->nazwa = $nazwa;
        $this->opis = $opis;
    }
   
    public function getOpis()
    {
        return $this->opis;
    }

   
    public function setOpis($opis)
    {
        $this->opis = $opis;        
    }

    public function getNazwa()
    {
        return $this->nazwa;
    }

    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;        
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;        
    }
}