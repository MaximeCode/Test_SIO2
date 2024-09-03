<?php

require_once('./auto.php');
require_once('./Constructor.php');

$peugeot_206 = new Auto("GB-782-VZ", 60, 2014);
$peugeot_5008 = new Auto("AB-123-CD", 120, 2021);

$peugeot = new Constructor("Peugeot", "./peugeot.png");

$peugeot->addAuto($peugeot_206);
$peugeot->addAuto($peugeot_5008);

?>

<h1>Meca'Auto</h1>
<ul>
<?php
foreach ($peugeot->getAutos() as $car) {
    $car->afficheDetails();
} ?>
</ul>

