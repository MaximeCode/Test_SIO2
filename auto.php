<?php

class Auto
{
    private string $immat;
    private int $chevaux;
    private int $dateMEC; // Date de mise en circulation

    private Constructor $constructor;

    public function __construct(string $immat, int $chevaux, int $dateMEC, Constructor $constructor)
    {
        $this->immat = $immat;
        $this->chevaux = $chevaux;
        $this->dateMEC = $dateMEC;
        $this->constructor = $constructor;
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

    public function getDateMEC(string $dateMEC)
    {
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

    /**
     * @return Constructor
     */
    public function getConstructor(): Constructor
    {
        return $this->constructor;
    }

    /**
     * @param Constructor $constructor
     */
    public function setConstructor(Constructor $constructor): void
    {
        $this->constructor = $constructor;
    }

    /**
     * Show immat, puissance, date de mise en circulation
     *
     * @return void
     */

    public function afficheDetails()
    {
        echo "
        Immatriculation : $this->immat<br>
        Puissance : $this->chevaux<br>
        Date de mise en circulation : $this->dateMEC";
    }
}