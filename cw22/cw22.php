<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .info{background-color: lightskyblue;border: solid 2px blue;border-radius: 6px;box-shadow: 4px 5px 5px;
        margin: 20px;padding: 8px;}
        .wyr{font-weight: bold; color: green;font-size: 1.2em;}
    </style>
    <title>Document</title>
</head>

<body>
    <?php
    //definicja klasy Osoba
    class Osoba
    {
        //pola czyli właściwości obiektów klasy
        private $imie = "Anna";
        private $nazwisko = "Nowak";
        private $wiek = 25;
        //metody czyli zachowania obiektów klasy
        public function getImie() {
            return $this->imie;
        }
        public function setImie($imie) {
            $this->imie = $imie;
        }

        public function getNazwisko(){
            return $this->nazwisko;
        }

        public function setNazwisko($nazwisko){
            $this->nazwisko = $nazwisko;
        }
        public function __construct($imie = "Anna",$nazwisko="Nowak",$wiek = 25)  {
            echo "<p>Wywołanie konstruktora klasy: ".__CLASS__."</p>";
            $this->imie = $imie;
            $this->nazwisko = $nazwisko;
            $this->wiek = $wiek;
        }
        public function __destruct()
        {
            echo "<p>Wywołanie destruktora klasy: ".__CLASS__." Osoba ulega zniszczeniu!!!</p>";
        }
        public function Info() {
            $html = "<div class='info'>";
            $html .= "Imię: <span class='wyr'>{$this->imie}</span> Nazwisko: <span class='wyr'>{$this->nazwisko}</span>"
             ." wiek: <span class='wyr'>{$this->wiek}</span></div>";
            return $html;
        }
        public function postarzenie($ile)        {
           $this->wiek += $ile; //$this->wiek = $this->wiek + $ile;
        }
    }
    //tworzenie obiektów klasy Osoba
    $o1 = new Osoba();//tworzenie obiektu o1   
    // $o1->imie = "Ala";
    $o2 = new Osoba("Xawery","Frankowski",35); //tworzenie obiektu o2
    $o3 = new Osoba("Tomasz"); 
      
    echo "<h3>Lista osób</h3>";
    $inna = true;
    if($inna){
        echo "<p>Jest inna rzeczywistość</p>";
        $o100 = new Osoba("R2D2","FFFFFF",234);
        echo $o100->Info();
        unset($o100);

    }else{
        echo "<p>Nie ma innej rzeczywistości</p>";
    }
    echo $o1->Info();
    echo $o2->Info();
    echo $o3->Info();
    echo "<p>Parę lat później.....</p>";
    $o3->postarzenie(5); 
    echo $o3->Info();

    ?>
</body>

</html>