<?php 

require_once "MachineACafe.php";
require_once "Capsule.php";

class MachineACafeFroid extends MachineACafe
{
    public function faireDuCafe(Capsule $capsule)
    {
        $cafe = parent::faireDuCafe($capsule);
        $cafe = $cafe . ' Il est glacé !!!';
        return $cafe;
    }
}