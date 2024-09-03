<?php

class Auto
{
    private string $immat;
    private int $chevaux;
    private int $dateMEC; // Date de mise en circulation

    public function __construct(string $immat, int $chevaux, int $dateMEC) {
        $this->immat = $immat;
        $this->chevaux = $chevaux;
        $this->dateMEC = $dateMEC;
    }

    public function getImmat(string $immat)
    {
        return $this->$immat;
    }

    public function setImmat(string $immat, $value): void
    {
        $this->$immat = $value;
    }

    public function getChevaux(string $chevaux)
    {
        return $this->$chevaux;
    }

    public function setChevaux(string $chevaux, $value): void
    {
        $this->$chevaux = $value;
    }

    /**
     * @param string $dateMEC
     * @return mixed
     */

    public function getDateMEC(string $dateMEC) {
        return $this->$dateMEC;
    }

    /**
     * Date de mise en circulation
     *
     * @param int $dateMEC
     */
    public function setDateMEC(string $dateMEC, $value): void
    {
        $this->$dateMEC = $value;
    }

    public function afficheDetails() {
        echo "
        <li>Immatriculation : $this->immat</li>
        <li>Puissance : $this->chevaux</li>
        <li>Date de mise en circulation : $this->dateMEC</li>";
    }


}