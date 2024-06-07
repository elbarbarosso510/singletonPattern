<?php

class Monatsabrechnung
{
    private array $dozent = [];


    public function createSalary()
    {
        $this->dozent[] = new Honorar(30, 100);
        $this->dozent[] = new Festangestellt(3000, 0.4);
    }

    public function getSalary(): float
    {
        $gesamtkosten = 0;
        foreach ($this->dozent as $individual){
            $gesamtkosten += $individual->getBetrag();
        }
        return $gesamtkosten;
    }
}