<?php

namespace Webmapp\WeightConverter;

class WeightConverterClass
{
    private $kilograms;

    // Costruttore che inizializza il valore in chilogrammi
    public function __construct($kilograms)
    {
        $this->kilograms = $kilograms;
    }

    // Metodo per convertire i chilogrammi in libbre
    public function toPounds()
    {
        $pounds = $this->kilograms * 2.20462;

        return round($pounds, 5); // Arrotondare a 5 cifre decimali per precisione
    }
}
