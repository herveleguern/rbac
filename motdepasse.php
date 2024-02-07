<?php
class MotDePasse
{
    private $valeurMdp; //string
    private $dateMdp; //DateTime

    public function __construct($valeurMdp, $dateMdp)
    {
        $this->valeurMdp = $valeurMdp;
        $this->dateMdp = $dateMdp;
    }

    public function getValeurMdp(){
        return $this->valeurMdp;
    }
}
