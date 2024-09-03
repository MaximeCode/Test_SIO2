<?php

class Constructor
{
    private string $name;
    private string $img;
    private array $autos;

    /**
     * @param string $name
     * @param string $img
     */

    public function __construct(string $name, string $img) {
        $this->name = $name;
        $this->img = $img;
        $this->autos = [];
    }

    public function getName(): string {
        return $this->name;
    }

    public function getImg(): string {
        return $this->img;
    }

    public function getAutos(): array {
        return $this->autos;
    }

    /**
     * Ajoute une voiture à la liste des voitures du constructeur.
     *
     * @param Auto $auto
     */
    public function addAuto(Auto $auto): void {
        $this->autos[] = $auto;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $img
     */
    public function setImg(string $img): void
    {
        $this->img = $img;
    }


}