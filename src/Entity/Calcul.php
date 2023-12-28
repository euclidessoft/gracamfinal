<?php


namespace App\Entity;


class Calcul
{
    /**
     * @var string|null
     */
    private $dimension;

    /**
     * @var string|null
     */
    private $epaisseur;

    /**
     *
     * @return string|NULL
     */
    public function getDimenssion()
    {
        return $this->dimenssion;
    }

    /**
     *
     * @return string|NULL
     */
    public function getEpaisseur()
    {
        return $this->epaisseur;
    }

    /**
     * @param string|NULL $dimenssion
     * @return Calcul
     */
    public function setDimenssion($dimenssion)
    {
        $this->dimenssion = $dimenssion;
        return $this;
    }

    /**
     * @param string|NULL $epaisseur
     * @return Calcul
     */
    public function setEpaisseur($epaisseur)
    {
        $this->epaisseur = $epaisseur;
        return $this;
    }

}