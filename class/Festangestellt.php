<?php

class Festangestellt implements IBetrag{
    private float $monatslohn;
    private float $lohnnebenkosten;

    public function __construct(float $monatslohn, float $lohnnebenkosten)
    {
        $this->monatslohn = $monatslohn;
        $this->lohnnebenkosten = $lohnnebenkosten;
    }

    public function getBetrag() : float{
        return $this->monatslohn * $this->lohnnebenkosten;
    }

}