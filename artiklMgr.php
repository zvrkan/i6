<?php

class ArtiklMgr
{
    private static $instance;
    protected $lista = array();

    public function getLista()
    {
        return $this->lista;
    }
    public function setLista($l)
    {
        $this->lista[] = $l;
    }
    public static function getInstance()
        {
            if(!isset(self::$instance))
            {
                self::$instance = new self;
            }
            return self::$instance;
        }
    public function Prikaz()
    {
        $lista = $this->getLista();

        foreach($lista as $key => $val)
        {
            echo $val->getNaziv() . "-[" . $val->getCijena() . "]\n";
        }
    }
    public function Unos()
    {
        $n = readline("Unesite naziv artikla: ");
        $c = readline("Unesite cijenu artikla: ");
        $this->setLista(new artikl($n,$c));
    }
}




?>