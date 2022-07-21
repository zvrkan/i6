<?php

class Artikl
{
    protected $naziv;
    protected $cijena;

    function __construct($n,$c)
    {
        $this->setNaziv($n);
        $this->setCijena($c);
    }

    public function getCijena()
    {
        return $this->cijena;
    }
    public function getNaziv()
    {
        return $this->naziv;
    }
    protected function setNaziv($n)
    {
        $this->naziv = $n;
    }
    protected function setCijena($c)
    {
        $this->cijena = $c;
    }
}


?>