<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <link rel="stylesheet" href="../nd.css">
</head>
<body>
<h1>Objects</h1>    
<p>1. Sukurti klasę Kibiras1. Sukurti private savybę akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.</p>
<div class='solution'>
    <?php
    require(__DIR__ .'/1/Kibiras.php');
    $kibiras1 = new Kibiras;
    echo "Kibiras1: " . $kibiras1->kiekPririnktaAkmenu();
    echo  '<br/>Pridedam akmenį.<br/>';
    $kibiras1->prideti1Akmeni();
    echo "Kibiras1: " . $kibiras1->kiekPririnktaAkmenu();
    $randKiekis =  rand(1, 20);
    echo  '<br/>Pridedam '. $randKiekis . ' akmenų.<br/>';
    $kibiras1->pridetiDaugAkmenu($randKiekis);
    echo "Kibiras1: " . $kibiras1->kiekPririnktaAkmenu();
    ?>
</div>
<p>2. Sukurti klasę Pinigine. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, jeigu kitaip- prie popieriniaiPinigai. Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje.
<p>
<div class='solution'>
    <?php
    require(__DIR__ .'/2/Pinigine.php');
    $louisVuitton = new Pinigine;
    $louisVuitton->ideti(111.11);
    $louisVuitton->skaiciuoti();
    ?>
</div>
<p>3. (STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2. Patobulinkite pridėdami statinę privačią savybę akmenuKiekisVisuoseKibiruose. Ši savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. Sukurkite geterį objekte, ir statinį geterį klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose reikšmę. Sukurkite tris kibirus ir pademonstruokite veikimą.
</p>
<div class='solution'>
    <?php
        require(__DIR__ . '/3/Kibiras2.php');
        $kib1 = new Kibiras2;
        $kib2 = new Kibiras2;
        $kib3 = new Kibiras2;

        echo "Kib1: " . $kib1->kiekPririnktaAkmenu() . '<br/>';
        echo "Kib2: " . $kib2->kiekPririnktaAkmenu() . '<br/>';
        echo "Kib3: " . $kib3->kiekPririnktaAkmenu() . '<br/>';

        $randKiekis =  rand(1, 20);
        echo  'Kib1 pridedam '. $randKiekis . ' akmenų.<br/>';
        $kib1->pridetiDaugAkmenu($randKiekis);
        $randKiekis =  rand(1, 20);
        echo  'Kib2 pridedam '. $randKiekis . ' akmenų.<br/>';
        $kib2->pridetiDaugAkmenu($randKiekis);
        $randKiekis =  rand(1, 20);
        echo  'Kib3 pridedam '. $randKiekis . ' akmenų.<br/>';
        $kib3->pridetiDaugAkmenu($randKiekis);

        echo "Kib1: " . $kib1->kiekPririnktaAkmenu() . '<br/>';
        echo "Kib2: " . $kib2->kiekPririnktaAkmenu() . '<br/>';
        echo "Kib3: " . $kib3->kiekPririnktaAkmenu() . '<br/>';

        echo 'Viso akmenų: ' . $kib1->akmenuKiekisVisuoseKibiruose();
    ?>
</div>

<p>4. (EXTENDS) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras3. Sukurkite dar vieną klasę KibirasNePo1, kuri extendina klasę Kibiras3. KibirasNePo1 turi naudoti visus tėvinius metodus, bet metodas Prideti1Akmeni() turi pridėti ne vieną o atsitiktinį akmenų kiekį nuo 2 iki 5. Sukurkite KibirasNePo1 objektą ir pademonstruokite veikimą.
</p>
<div class='solution'>
    <?php
        require(__DIR__ . '/4/Kibiras3.php');
        require(__DIR__ . '/4/KibirasNePo1.php');

        $kib4 = new KibirasNePo1;

        echo "Kib4: " . $kib4->kiekPririnktaAkmenu() . '<br/>';
        $kib4->prideti1Akmeni();
        echo "Kib4: " . $kib4->kiekPririnktaAkmenu() . '<br/>';

    ?>
</div>
</body>
</html>