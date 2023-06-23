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
    private $jedzenie;
    private $woda;
    private $leki;

    public function __construct($bron, $jedzenie, $woda, $leki)
    {
        $this->bron = $bron;
        $this->jedzenie = $jedzenie;
        $this->woda = $woda;
        $this->leki = $leki;
    }

    public function getBron()
    {
        return $this->bron;
    }

    public function setBron($bron)
    {
        $this->bron = $bron;
    }

    public function getJedzenie()
    {
        return $this->jedzenie;
    }

    public function setJedzenie($jedzenie)
    {
        $this->jedzenie = $jedzenie;
    }

    public function getWoda()
    {
        return $this->woda;
    }

    public function setWoda($woda)
    {
        $this->woda = $woda;
    }

    public function getLeki()
    {
        return $this->leki;
    }

    public function setLeki($leki)
    {
        $this->leki = $leki;
    }
}

// Pobieranie danych
$dbConnection = new PDO('pgsql:host=localhost:8080;dbname=DANE', 'admin', 'admin');

$ludzieQuery = $dbConnection->query('SELECT * FROM ludzie');
$ludzieData = $ludzieQuery->fetch(PDO::FETCH_ASSOC);
$ludzie = new Ludzie($ludzieData['ilosc']);

$zombieQuery = $dbConnection->query('SELECT * FROM zombie');
$zombieData = $zombieQuery->fetch(PDO::FETCH_ASSOC);
$zombie = new Zombie($zombieData['ilosc']);

$zasobyQuery = $dbConnection->query('SELECT * FROM zasoby');
$zasobyData = $zasobyQuery->fetch(PDO::FETCH_ASSOC);
$zasoby = new Zasoby($zasobyData['bron'], $zasobyData['jedzenie'], $zasobyData['woda'], $zasobyData['leki']);

// Interakcje
$ludzie->setIlosc($ludzie->getIlosc() - 5); // 5 ludzi umiera przez zombie
$zombie->setIlosc($zombie->getIlosc() + 5); // pojawia się 5 nowych zombie w związku z poprzednim zdarzeniem
$zasoby->setJedzenie($zasoby->getJedzenie() - 20); // Ludzie wykorzystują 20 jednostek pożywienia

// Aktualizacja danych
$dbConnection->query("UPDATE ludzie SET ilosc = {$ludzie->getIlosc()}");
$dbConnection->query("UPDATE zombie SET ilosc = {$zombie->getIlosc()}");
$dbConnection->query("UPDATE zasoby SET jedzenie = {$zasoby->getJedzenie()}");

// Aktualny stan symulacji
echo "Liczba ludzi: " . $ludzie->getIlosc() . "<br>";
echo "Liczba zombie: " . $zombie->getIlosc() . "<br>";
echo "Liczba jedzenia: " . $zasoby->getJedzenie() . "<br>";

?>
