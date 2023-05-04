<?php

class Movie {
   public $titolo;
   public $genere;
   public $etaConsigliata;

   function __construct($titolo,$genere,$etaConsigliata = 8) {
      $this->titolo = $titolo;
      $this->genere = $genere;
      $this->etaConsigliata = $etaConsigliata;
   }

   function showDetail() {
      echo 'Titolo: ' . $this->titolo . '</br>';
      echo 'Genere: ' . $this->genere . '</br>';
      echo 'Età Consigliata: ' . $this->etaConsigliata . '</br>';
      echo '</br>';
   }
}

$saw = new Movie("Saw", "Horror",18);
$oceania = new Movie("Oceania", "Animazione",3);
$titanic = new Movie("Titanic", "Documentario");

echo $saw->showDetail();
echo $oceania->showDetail();
echo $titanic->showDetail();