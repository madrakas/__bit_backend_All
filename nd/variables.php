<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
    <link rel="stylesheet" href="./nd.css">
</head>
<body>
    <h1>1. Kintamieji ir sąlygos</h1>    
    <p>1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
    "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".</p>
    <p class='solution'>
    <?php
    $vardas = 'Arvydas';
    $pavarde ='Šimbelis';
    $dateOfBirth = "1982-11-28";
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $diffStr = $diff->format('%y');
    echo "Aš esu $vardas $pavarde. Man yra $diffStr metai(ų).";
    ?>
    </p>
    <p>2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.</p>
    <p class='solution'>
    <?php
    $a = rand(0, 4);
    $b = rand(0, 4);
    if ($a === 0 || $b === 0){
        echo 'Cannot divide by zero.';
    } elseif($a > $b){
        $result = round(($a / $b), 2);
        echo ("$a / $b = $result" );
    }else{
        $result = round(($b / $a), 2);
        echo ("$b / $a = $result" );
    }
    
    ?>
    </p>
    <p>3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.</p>
    <p class='solution'>
    <?php
    $a = rand(0, 25);
    $b = rand(0, 25);
    $c = rand(0, 25);
    
    $result = '';
    echo "$a | $b | $c";
    // A
    if (($b <= $a && $a <= $c) || ($c <= $a &&  $a <= $b)){
        $result = $a;
    }
    // B
    if (($a <= $b && $b <= $c) || ($c <= $b &&  $b <= $a)){
        $result = $b;
    }
    // C
    if (($b <= $c && $c <= $a) || ($a <= $c &&  $c <= $b)){
        $result = $c;
    }
    
    echo ' => ' . $result;
    
    ?>
    </p>
    <p>4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. </p>
    <p class='solution'>
    <?php
    $a = rand(1, 10);
    $b = rand(1, 10);
    $c = rand(1, 10);
    
    if ((($a + $b) > $c) && (($a + $c) > $b) && (($b + $c) > $a)){
        echo "$a, $b, $c trikampis galimas";
    } else {
        echo "$a, $b, $c trikampis NEgalimas";
    }
    ?>
    </p>
    <p>5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
    reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).</p>
    <p class='solution'>
    <?php
    $a =rand(0, 2);
    $b =rand(0, 2);
    $c =rand(0, 2);
    $d =rand(0, 2);

    echo "$a | $b | $c | $d <br/>";

    $nulls = 0;
    $ones = 0;
    $twos = 0;

    // A
    if ($a === 0) $nulls++;
    if ($a === 1) $ones++;
    if ($a === 2) $twos++;
    // B
    if ($b === 0) $nulls++;
    if ($b === 1) $ones++;
    if ($b === 2) $twos++;
    // C
    if ($c === 0) $nulls++;
    if ($c === 1) $ones++;
    if ($c === 2) $twos++;
    // D
    if ($d === 0) $nulls++;
    if ($d === 1) $ones++;
    if ($d === 2) $twos++;

    echo '------------<br/>';
    echo "Zeroes: $nulls,<br/>Ones: $ones,<br/>Twos: $twos."
    ?> 
    </p>
    <p>6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: 	&lt;h3&gt;3	&lt;/h3&gt;.</p>
    <?php
    $a = rand(1, 6);
    echo "<h$a class='solution'>$a</h$a>";
    ?>
    </p>
    <p>7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. </p>
    <p class='solution'>
    <?php
    $a = rand(-10, 10);
    $b = rand(-10, 10);
    $c = rand(-10, 10);
    $g = "<span style='color:blue'>";
    $r = "<span style='color:red'>";

    if ($a >= 0){
        echo $g;
    }else{
        echo $r;
    }
    echo $a . '</span> ';
    
    if ($b >= 0){
        echo $g;
    }else{
        echo $r;
    }
    echo $b . '</span> ';

    if ($c >= 0){
        echo $g;
    }else{
        echo $r;
    }
    echo $c . '</span>';
    ?>
    </p>

    <p>8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.</p>
    <p class='solution'>
    <?php
    $kiekis = rand(5, 3000);

    if($kiekis > 1000){
        $kaina = $kiekis * 0.97;
    }elseif($kiekis > 2000){
        $kaina = $kiekis * 0.96;
    }else{
        $kaina = $kiekis;
    }
    echo "Kiekis: $kiekis<br/>Kaina: $kaina EUR";
    ?>
    </p>
    <p>9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.</p>
    <p class='solution'>
    <?php
    $a = rand(0, 100);
    $b = rand(0, 100);
    $c = rand(0, 100);
    echo "$a | $b | $c <br/>";

    $average1 = round((($a + $b + $c) / 3), 0);
    
    //average2
    $sum = 0;
    $count = 3;
    // A
    if ($a >= 10 || $a <= 90){
        $sum += $a; 
    } else {
        $count--;
    }
    // B
    if ($b >=10 || $b <= 90){
        $sum += $b; 
    } else {
        $count--;
    }
    // C
    if ($c >=10 || $c <= 90){
        $sum += $c; 
    } else {
        $count--;
    }
    $average2 = round(($sum / $count), 0);

    echo "Average1: $average1<br/>Average2: $average2";
    ?>
    </p>
    <p>10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.</p>
    <p class='solution'>
    <?php 
    $time = rand(0, 86400);
    $plusTime = rand(0, 300);
    $time2 = $time + $plusTime;
    $hours1 = ($time -$time % 3600) / 3600;
    $hours2 = ($time2 -$time2 % 3600) / 3600;
    $minutes1 = (($time - $hours1 * 3600) - ($time - $hours1 * 3600) % 60) / 60;
    $minutes2 = (($time2 - $hours2 * 3600) - ($time2 - $hours2 * 3600) % 60) / 60;
    $seconds1 = (($time - $hours1 * 3600) - $minutes1 * 60);
    $seconds2 = (($time2 - $hours2 * 3600) - $minutes2 * 60);
    echo "Time: $time <br/>";
    echo "watch1 [$hours1 : $minutes1 : $seconds1]<br/>";
    echo "watch2 [$hours2 : $minutes2 : $seconds2]<br/>";
    echo "Plus seconds: $plusTime<br/>";
    ?>
    </p>
    <p>11. Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. Naudoti ciklų ir masyvų NEGALIMA.</p>
    <p>
    <p class='solution'>
    <?php
    $a = rand(1000, 9999);
    $b = rand(1000, 9999);
    $c = rand(1000, 9999);
    $d = rand(1000, 9999);
    $e = rand(1000, 9999);
    $f = rand(1000, 9999);

    echo "Before sort: $a, $b, $c, $d, $e, $f<br/>";

    $result= $a . '';
    $min1 = $a;
    $min2 = null;
    $min3 = null;
    $min4 = null;
    $min5 = null;
    $min6 = null;

    if ($b < $min1){
        $min2 = $min1; 
        $min1 = $b;
    }else{
        $min2 = $b;    
    }

    if ($c < $min1){
        $min3 = $min2;
        $min2 = $min1;
        $min1 = $c;
    }else{
        if ($c < $min2){
            $min3 = $min2;
            $min2 = $c; 
        }else{
            $min3 = $c;
        }
    }

    if ($d < $min1){
        $min4 = $min3;
        $min3 = $min2;
        $min2 =$min1;
        $min1 = $d;
    }else{
        if ($d < $min2){
            $min4 = $min3;
            $min3 = $min2;
            $min2 = $d; 
        }elseif($d < $min3){
            $min4 = $min3;
            $min3 = $d;
        }else{
            $min4 =$d;
        }
    }

    if ($e < $min1){
        $min5 = $min4;
        $min4 = $min3;
        $min3 = $min2;
        $min2 =$min1;
        $min1 = $e;
    }else{
        if ($e < $min2){
            $min5 = $min4;
            $min4 = $min3;
            $min3 = $min2;
            $min2 = $e; 
        }elseif($e < $min3){
            $min5 = $min4;
            $min4 = $min3;
            $min3 = $e;
        }elseif($e < $min4){
            $min5 = $min4;
            $min4 =$e;
        }else{
            $min5 =$e;
        }
    }

    
    if ($f < $min1){
        $min6 =$min5;
        $min5 = $min4;
        $min4 = $min3;
        $min3 = $min2;
        $min2 =$min1;
        $min1 = $f;
    }else{
        if ($f < $min2){
            $min6 = $min5;
            $min5 = $min4;
            $min4 = $min3;
            $min3 = $min2;
            $min2 = $f; 
        }elseif($f < $min3){
            $min6 = $min5;
            $min5 = $min4;
            $min4 = $min3;
            $min3 = $f;
        }elseif($f < $min4){
            $min6 = $min5;
            $min5 = $min4;
            $min4 = $f;
        }elseif($f < $min5){
            $min6 = $min5;
            $min5 = $f;
        }else{
            $min6 = $f;
        }

    }
    
    echo "After sort: $min6, $min5, $min4, $min3, $min2, $min1";
    ?>
    </p>
</body>
</html>