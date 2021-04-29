<?php

require_once "MachineACafe.php";
require_once "Capsule.php";
require_once "MachineACafeFroid.php";

$machineACafe = new MachineACafe();

$capsuleArabica = new Capsule("Arabica");
$capsuleCappuccino = new Capsule("Cappuccino");

$capsuleArabica->setQuantiteCafe(2);
$capsuleCappuccino->setQuantiteCafe(1);

$cafeArabica = $machineACafe->faireDuCafe($capsuleArabica);
$cafeCappuccino = $machineACafe->faireDuCafe($capsuleCappuccino);

$capsuleFrappeFramboise = new Capsule("Frappé framboise");
$capsuleFrappeFramboise->setQuantiteCafe(3);

$cafeFramboise = $machineACafe->faireDuCafe($capsuleFrappeFramboise);

$machineACafeFroid = new MachineACafeFroid();

$frappeFramboise = $machineACafeFroid->faireDuCafe($capsuleFrappeFramboise);

echo $cafeArabica . '<br>';

echo $cafeCappuccino . '<br>';

echo $cafeFramboise . '<br>';

echo $frappeFramboise;
