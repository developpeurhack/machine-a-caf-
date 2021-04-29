<?php

class Capsule
{
    private $typeCafe;
    private $quantiteCafe;

    // $capsule1 = new Capsule("Pure Arabica")
    // $capsule2 = new Capsule("Capuccino")
    public function __construct($typeDeCafe)
    {
        $this->typeCafe = $typeDeCafe;
    }

    public function getTypeCafe()
    {
        return $this->typeCafe;
    }

    // ici, je ne souhaite pas forcément pouvoir modifier le type
    // de café de ma capsule en "cours de route"
    /* public function setTypeCafe($typeCafe)
    {
        // TODO : vérifier que le type de café existe
        $this->typeCafe = $typeCafe;
    } */

    public function getQuantiteCafe()
    {
        return $this->quantiteCafe;
    }

    public function setQuantiteCafe($quantiteCafe)
    {
        if($quantiteCafe < 0) {
            die("Vous ne pouvez pas mettre une quantité de café négative.");
        }
        $this->quantiteCafe = $quantiteCafe;
    }
}