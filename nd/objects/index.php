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
<p>6. Sukurti klasę Stikline. Sukurti privačią savybę turis ir kiekis. Parašyti metodą ipilti($kiekis), kuris keistų savybę kiekis. Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis netelpa ir būna lygus tūriui. Parašyti metodą ispilti(), kuris grąžiną kiekį. Pilant išpilamas visas kiekis, tas kas netelpa, nuteka per stalo viršų. Sukurti tris stiklinės objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, o mažesnę į dar mažesnę.
</p>
<div class='solution'>
    <?php
        require(__DIR__ . '/6/Stikline.php');
        $stikline1 = new Stikline(200);
        $stikline2 = new Stikline(150);
        $stikline3 = new Stikline(100);
     
        $stikline1->ipilti(250);

        $stikline2->ipilti($stikline1->ispilti());
        $stikline3->ipilti($stikline2->ispilti());

        echo 'Stikline1: ' . $stikline1->koksKiekis() . '<br/>';
        echo 'Stikline2: ' . $stikline2->koksKiekis() . '<br/>';
        echo 'Stikline3: ' . $stikline3->koksKiekis() . '<br/>';
    ?>
</div>
<p>7. Sukurti klasę Grybas. Sukurti klasę Krepsys. Krepsys turi konstantą DYDIS lygią 500. Grybas turi tris privačias savybes: valgomas, sukirmijes, svoris. Kuriant Grybo objektą jo savybės turi būti atsitiktinai priskiriamos taip: valgomas- true arba false, sukirmijes- true arba false ir svoris- nuo 5 iki 45. Eiti grybauti, t.y. Kurti naujus Grybas objektus, jeigu nesukirmijęs ir valgomas dėti į Krepsi objektą, kol bus pririnktas pilnas krepšys nesukirmijusių ir valgomų grybų (gali būti biški daugiau nei DYDIS).
</p>

<div class='solution'>
    <?php
        require (__DIR__ . '/7/Krepsys.php');
        require (__DIR__ . '/7/Grybas.php');

        $rinkinys = 0;
        while ($rinkinys < Krepsys::DYDIS) {
            $laimikis = new Grybas;
            $rinkinys += $laimikis->geroGryboSvoris();
        }
        echo 'Krepšio svoris: ' . $rinkinys;
    ?>
</div>
<p>8. Patobulinti 2 uždavinio piniginę taip, kad būtų galima skaičiuoti kiek piniginėje yra monetų ir kiek banknotų. Parašyti metodą monetos(), kuris skaičiuotų kiek yra piniginėje monetų ir metoda banknotai() - popierinių pinigų skaičiavimui.
</p>
<div class='solution'>
<?php
        // require(__DIR__ .'/2/Pinigine.php');
        require(__DIR__ .'/8/Pinigine2.php');
        
        
        $prada = new Pinigine2;
        $prada->ideti(45.5);
        $prada->ideti(1);
        $prada->ideti(0.99);

        echo $prada->monetos() . '<br/>';
        echo $prada->banknotai();
    ?>
</div>

<p>9. (STATIC) Sukurkite klasę MarsoPalydovas.  Kontroliuokite objekto kūrimą iš klasės naudodami statinį metodą. Padarykite taip, kad iš viso būtų galima sukurti tik du objektus iš šitos klasės. Pirmam sukuriamam objektui įrašykite privačią savybę vardas lygią stringui “Deimas”, o antram tokią pat savybę tik lygią stringui “Fobas”. Bandant sukurti trečią objektą, turėtų būti grąžinamas vienas iš anksčiau sukurtų objektų parinktas atsitiktine tvarka.
</p>
<div class='solution'>
    <?php
        require (__DIR__ . '/9/MarsoPalydovas.php');

        $sp1 = MarsoPalydovas::getPalydovai();
        $sp2 = MarsoPalydovas::getPalydovai();
        $sp3 = MarsoPalydovas::getPalydovai();
        $sp4 = MarsoPalydovas::getPalydovai();
        $sp5 = MarsoPalydovas::getPalydovai();

        echo '<pre>';
        var_dump($sp1);
        var_dump($sp2);
        var_dump($sp3);
        var_dump($sp4);
        var_dump($sp5);
        echo '</pre>';
    ?>
</div>
</body>
</html>