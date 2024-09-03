<?php

require_once('./auto.php');
require_once('./Constructor.php');

$peugeot = new Constructor("Peugeot", "./peugeot.png");
$renault = new Constructor("Renault", "./renault.png");

$peugeot_206 = new Auto("GB-782-VZ", 60, 2014, $peugeot);
$peugeot_5008 = new Auto("AB-123-CD", 120, 2021, $peugeot);
$renault_clio_5 = new Auto("AF-546-MA", 90, 2020, $renault);

$peugeot->addAuto($peugeot_206);
$peugeot->addAuto($peugeot_5008);
$renault->addAuto($renault_clio_5);

$constructors = [$peugeot, $renault];

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Meca'Auto ⚙️</title>
</head>
<body class="container my-3">

<h1>Meca'Auto ⚙️</h1>
<div class="row mt-5">
    <?php foreach ($constructors as $marque) : ?>
        <?php foreach ($marque->getAutos() as $car) : ?>
            <div class="col-md-4">
                <div class="card mb-4 d-flex align-items-center">
                    <h4>Constructeur : <?= $car->getConstructor()->getName() ?></h4>
                    <img src="<?= $car->getConstructor()->getImg() ?>" alt="<?= $car->getConstructor()->getName() ?>"
                         width="100px">
                    <p><?php $car->afficheDetails(); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>

