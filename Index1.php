<?php

class Ludzie
{
    private $ilosc;

    public function __construct($ilosc)
    {
        $this->ilosc = $ilosc;
    }

    public function getIlosc()
    {
        return $this->ilosc;
    }

    public function setIlosc($ilosc)
    {
        $this->ilosc = $ilosc;
    }
}
class Zombie
{
    private $ilosc;

    public function __construct($ilosc)
    {
        $this->ilosc = $ilosc;
    }

    public function getIlosc()
    {
        return $this->ilosc;
    }

    public function setIlosc($ilosc)
    {
        $this->ilosc = $ilosc;
    }
}

class Zasoby
{
    private $bron;
    private $zywnosc;
    private $apteczka;

    public function __construct($bron, $zywnosc, $apteczka)
    {
        $this->bron = $bron;
        $this->zywnosc = $zywnosc;
        $this->apteczka = $apteczka;
    }

    public function getBron()
    {
        return $this->bron;
    }

    public function setBron($bron)
    {
        $this->bron = $bron;
    }

    public function getZywnosc()
    {
        return $this->zywnosc;
    }

    public function setZywnosc($zywnosc)
    {
        $this->zywnosc = $zywnosc;
    }

    public fteczka()
    {
        return $this->apteczka;
    }

public function setApteczka($apteczka)
{
    $this->apteczka = $apteczka;
}
}

$ludzie = new Ludzie(100);
$zombie = new Zombie(10);
$zasoby = new Zasoby(10, 100, 50);


// Na przykład: ataki zombie na ludzi, obrona ludzi, zużycie zasobów, itp.

// Przykładowe operacje na symulacji
$ludzie->setIlosc($ludzie->getIlosc() - 5); // 5 ludzi umiera w ataku zombie
$zombie->setIlosc($zombie->getIlosc() + 5); // 5 nowych zombie się pojawia
$zasoby->setZywnosc($zasoby->getZywnosc() - 20); // Zużycie 20 jednostek żywności przez ludzi

// Wyświetlanie aktualnego stanu symulacji
echo "Liczba ludzi: " . $ludzie->getIlosc() . "<br>";
echo "Liczba zombie: " . $zombie->getIlosc() . "<br>";
echo "Liczba jedzenia: " . $zasoby->getZywnosc() . "<br>";

?>