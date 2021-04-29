<?php 

require_once "Capsule.php";

class MachineACafe
{
    private $bacAEau;

    public function faireDuCafe(Capsule $capsule)
    {
        return "Le café suivant a été produit : " . $capsule->getTypeCafe(). " quantité : " . $capsule->getQuantiteCafe();
    }

    public function getBacAEau()
    {
        return $this->bacAEau;
    }

    public function setBacAEau($bacAEau)
    {
        if($bacAEau === null) {
            die('Vous ne devez jamais retirer le bac à eau !');
            // throw new BacAEauException();
        }
        $this->bacAEau = $bacAEau;
    }
}