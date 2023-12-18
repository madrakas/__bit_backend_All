<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
    <link rel="stylesheet" href="./nd.css">
</head>
<body>
    <h1>1. Ciklai</h1>    
    <p>1. Naršyklėje nupieškite linija iš 400 “*”. <br/>
    a) Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;<br/>
    b) Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”;</p>
    <p class='solution'>
    <?php
    echo "<span style='line-break: anywhere;'>" . str_repeat('*', 400) . '</span>';
    echo '<br/>-------------<br/>';
    echo  str_repeat((str_repeat('*', 50).'<br/>'), 8);
    ?>
     <p>2. Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.</p>
    <p class='solution'>
    <?php
    $counter = 0;
    for ($i=1; $i < 301 ; $i++) { 
        $randNum =rand(0, 300);
        if ($randNum > 150){
            $counter++;
        }
        if ($randNum > 275){
            echo "<span style='color:red'>" . $randNum . ' </span>';
        } else {
            echo $randNum . ' ';
        }
    }
    echo '<br /> daugiau už 150: ' .$counter;
    ?>
    <p>3. Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.</p>
    <p class='solution'>
    <?php
    $end = rand(3000, 4000);
    $result = '';

    for ($i=1; $i * 77 < $end ; $i++ ) { 
        $result .= ($i * 77) . " ";
    }

    $result = trim($result, ' ');
    $result = str_replace(' ', ', ', $result);
    echo $result;
    ?>
    </p>
    <p>4. Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.</p>
    <p class='solution' style="font-size: 6px; line-height: 6px; letter-spacing: 4px;">
    <?php
    for ($i=1; $i < 101 ; $i++) { 
        echo str_repeat('*', 100) . '<br/>';
    }
    ?>
    </p>
    <p>5. Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.</p>
    <p class='solution' style="font-size: 6px; line-height: 6px; letter-spacing: 4px;">
    <?php
    for ($i=1; $i < 101 ; $i++) { 
        for ($i2=1; $i2 < 101 ; $i2++) { 
            if ($i === $i2 || $i2 === 101 - $i){
                echo "<span style=color:red>*</span>";
            }else{
                echo '*';
            }
        }
        echo '<br/>';
    }
    ?>
    </p>
    <p>6. Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:<br/>
        a) Iškritus herbui;<br/>
        b) Tris kartus iškritus herbui;<br/>
        c) Tris kartus iš eilės iškritus herbui;</p>
    <p class='solution'>
    <?php

    echo 'a) ';
    $coin = null;
    while ($coin !== 0) { 
        $coin = rand(0, 1);
        if ($coin === 0){
            echo 'H';
        }else{
            echo 'S';
        }
    }
    echo '<br/>-------------<br/>b) ';
    $hcount = 0;
    while ($hcount < 3) { 
        $coin = rand(0, 1);
        if ($coin === 0){
            $hcount++;
            echo 'H';
        }else{
            echo 'S';
        }
    }
    echo '<br/>-------------<br/>c) ';
    $hcount = 0;
    while ($hcount < 3) { 
        $coin = rand(0, 1);
        if ($coin === 0){
            $hcount++;
            echo 'H';
        }else{
            $hcount = 0;
            echo 'S';
        }
    }
    ?>
    </p>
    <p>7.Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break. </p>
    <p class='solution'>
    <?php
    $kazys = 0;
    $kazysStr = '';
    $petras = 0;
    $petrasStr = '';
    
    while ($kazys < 222 && $petras < 222){
        $kbingo = rand(5, 25);
        $pbingo = rand(10, 20);
        $kazys += $kbingo;
        $petras += $pbingo;
        $kazysStr .= $kbingo . ' ';
        $petrasStr .= $pbingo . ' ';
    }
    echo "Kazys: $kazysStr. Viso: $kazys <br/>";
    echo "Petras: $petrasStr. Viso: $petras <br/>";
    if ($kazys > $petras){
        echo 'Laimėjo Kazys.';
    }elseif ($kazys < $petras){
        echo 'Laimėjo Petras.';
    }else{
        echo 'Lygiosios.';
    }
    ?>
    </p>
    <p>8. Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).</p>
    <p class='solution' style="font-size: 16px; line-height: 8px; ">
    <?php
    for ($i = 1; $i < 11; $i++){
        echo str_repeat('&nbsp;', 11 - $i) . getSomeStars($i) . '<br/>';
    }
    for ($i = 9; $i > 0; $i--){
        echo str_repeat('&nbsp;', 11 - $i) . getSomeStars($i) . '<br/>';
    }

    function getSomeStars($howMany){
        $result = '';
        for ($i=0; $i < $howMany ; $i++) { 
            $result .= randColSpan('*');
        }
        return $result;
    }

    function randColSpan($input){
        $result = "<span style='color: rgb(" . rand(0, 255) . " " . rand(0, 255) . " " . rand(0, 255) .")'>" . $input . "</span>";
        return $result;
    }
    ?>
    </p>
    <p>10. Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).<br/>
    “Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.<br/>
    “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei <br/>sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.</p>
    <p class='solution'>
    <?php
        $hcountsum1 = 0;
        $hcountsum2 = 0;
        echo 'Maži smūgiai</br>';
        for ($i=1; $i < 6 ; $i++) { 
            echo "Nail $i: ";
            $hcount = 0;
            for ($i2 = 85; $i2 > 0; ){
                $hit = rand(5, 20);
                $i2 -= $hit;
                echo $i2 . ' ';
                $hcount++;
            }
            echo " | $hcount smūgių.<br/>";
            $hcountsum1 += $hcount;
        }
        echo 'Viso mažų smūgių: ' . $hcountsum1;
        echo '<br/>Dideli smūgiai</br>';
        for ($i=1; $i < 6 ; $i++) { 
            echo "Nail $i: ";
            $hcount = 0;
            for ($i2 = 85; $i2 > 0; ){
                $hit = rand(20, 30);
                $miss = rand(0, 1);
                if ($miss === 0){
                    $i2 -= $hit;
                    echo $i2 . ' ';    
                }else{
                    echo 'Miss! ';    
                }
                $hcount++;
            }
            echo " | $hcount smūgių.<br/>";
            $hcountsum2 += $hcount;
        }
        echo 'Viso didelių smūgių: ' . $hcountsum2;
    ?>
    </p>
</body>
</html>