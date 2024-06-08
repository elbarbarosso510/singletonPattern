<?php

class Honorar implements IBetrag{
    private float $stundenlohn;
    private float $stundenpromonat;

    public function __construct(float $stundenlohn, float $stundenpromonat)
    {
        $this->stundenlohn = $stundenlohn;
        $this->stundenpromonat = $stundenpromonat;
    }

    public function getBetrag() : float{
        return $this->stundenpromonat / $this->stundenlohn;
    }

}