<pre><?php

require_once 'Classes/VervoersMiddel.php';
require_once 'Classes/VervoersMiddelAuto.php';
require_once 'Classes/VervoersMiddelVrachtAuto.php';
require_once 'Classes/VervoersMiddelFiets.php';

$auto = new VervoersMiddelAuto('plastic', 'rood', 5, 5);
echo "\n";
print_r($auto);

$vrachtAuto = new VervoersMiddelVrachtAuto('plastic', 'rood', 5, 5, '1234');
echo "\n";
print_r($vrachtAuto);

$fiets = new VervoersMiddelFiets('plastic', 'rood', 5, true);
echo "\n";
print_r($fiets);