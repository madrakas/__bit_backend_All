<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masyvai daugiamačiai</title>
    <link rel="stylesheet" href="./nd.css">
</head>
<body>
<h1>Masyvai daugiamačiai
</h1>    
<p>1.Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.</p>
<pre>
<p class='solution'>
    <?php
    $arr1 = [];
    for ($i=0; $i < 10; $i++) { 
        $child = []; 
        for ($i2=0; $i2 <5 ; $i2++) { 
            $child[] = rand(5, 25);
        }
        $arr1[] = $child;
    }  
    print_r($arr1);
    ?>
</p>
</pre>
<p>2. Naudodamiesi 1 uždavinio masyvu:<br/>
a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;<br/>
b) Raskite didžiausio elemento reikšmę;<br/>
c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)<br/>
d) Visus antro lygio masyvus “pailginkite” iki 7 elementų<br/>
e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai</p>
<pre>
<p class='solution'>
    <?php

    function flatten($array) {
        $results = [];

        foreach ($array as $key => $value) {
            if (is_array($value) && ! empty($value)) {
                $results = array_merge($results, flatten($value));
            } else {
                $results[$key] = $value;
            }
        }

        return $results;
    }

    $arr2 = flatten($arr1);
    $arr10plus = $arr2;
    array_filter($arr10plus, fn($a) => $a > 10);
    echo 'a) > 10: [' . implode(', ', $arr10plus) .']. Viso: ' . count($arr10plus) . '.<br/>';
    usort($arr2, fn($a, $b) => $b <=> $a);
    echo 'b) max value: ' . $arr2[0] . '.<br/>';

    $sums = [0, 0, 0, 0, 0];
    for ($i0=0; $i0 < 10; $i0++){
        for ($i=0; $i < 5; $i++) { 
            $sums[$i] += $arr1[$i0][$i];
        }
    }

    echo 'c) Sums: ' . implode(', ', $sums) . '<br/>';
    
    for ($i=0; $i < 10 ; $i++) { 
        $arr1[$i][] = rand(5, 25);
        $arr1[$i][] = rand(5, 25);
    }

    echo 'd) Arr1: ';
    print_r($arr1) ;
    
    $arr2 = [];
    for ($i=0; $i < 10 ; $i++) { 
        $arr2[] = array_sum($arr1[$i]);
    }
    echo 'e) Arr2: ';
    print_r($arr2);
    ?>
</p>
</pre>
<p>3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).</p>
<pre>
<p class='solution'>
    <?php
        $arr3 = [];

        for ($i=0; $i < 10; $i++) { 
            $arr3[] = [];
            $subArrLen = rand(2, 20);
            for ($i2=0; $i2 < $subArrLen ; $i2++) { 
                $arr3[$i][] = randLet();
            }
        }

        function randLet(){
            $lettersStr = 'ABCDEFGHIJKLMNOPQRSTUVXZY';
            $letters = str_split($lettersStr, 1);
            return($letters[rand(0, 24)]);
        }

        print_r($arr3);
    ?>
</p>
</pre>
<p>4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.</p>
<pre>
<p class='solution'>
    <?php
        usort($arr3, fn($a, $b) => count($a) <=> count($b));
        usort($arr3, fn($a, $b) => in_array('K', $b) <=> in_array('K', $a));
        print_r($arr3);
    ?>
</p>
</pre>
<p>5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100.</p>
<pre>
<p class='solution'>
    <?php
        $arr5 = [];
        for ($i=0; $i < 30 ; $i++) { 
            $arr5[] = [];
            $arr5[$i] = ['user_id' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];
        }
        print_r($arr5);
    ?>
</p>
</pre>
<p>6. Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.</p> 
<pre>
<p class='solution'>
    <?php
        usort($arr5, fn($a, $b) => $a['user_id'] <=> $b['user_id']);
        print_r($arr5);
        usort($arr5, fn($a, $b) => $b['place_in_row'] <=> $a['place_in_row']);
        print_r($arr5);
    ?>
</p>
</pre>

<p>7. Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.</p>
<pre>
<p class='solution'>
    <?php
        $arr7 = $arr5;
        for ($i=0; $i < count($arr7) ; $i++) { 
            $nameLen = rand(5, 15);
            $surnameLen = rand(5, 15);

            $name = '';
            $surname = '';
            for ($n=0; $n < $nameLen; $n++) { 
                $name .= randLet();
            }
            for ($n=0; $n < $surnameLen; $n++) { 
                $surname .= randLet();
            }

            // $arr7[$i] = [$arr7[$i] ...'name' => $name];
            $arr7[$i] = array_merge($arr7[$i], ['name' => $name]);
            $arr7[$i] = array_merge($arr7[$i], ['surname' => $surname]);
            
        }
        print_r($arr7);
    ?>
</p>
</pre>
<p>8.Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.</p>
<pre>
<p class='solution'>
    <?php
        $arr8 = [];
        for ($i=0; $i < 10 ; $i++) { 
            $subArrLen = rand(0, 5);
            
            if ($subArrLen > 0){
                $subArr = [];
                for ($c=0; $c < $subArrLen ; $c++) { 
                    $subArr[] = rand(0, 10);
                }
                $arr8[] = $subArr;
            }else{
                $arr8[] = rand(0, 10);
            }
            
        }

        print_r($arr8);
    ?>
</p>
</pre>
<p>9. Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos</p>
<pre>
<p class='solution'>
    <?php
        $arr9 = $arr8;
        $flatArr9 = flatten($arr9);
        echo 'Sum: ' . array_sum($flatArr9) . '<br/>';

        usort($arr9, function($a, $b){
            if (is_array($a)){
                $a = array_sum($a);
            }
            if (is_array($b)){
                $b = array_sum($b);
            }
            return ($a <=> $b);
        });
        print_r($arr9);
    ?>
</p>
</pre>
<p>10. Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.</p>
<p class='solution'>
    <?php
        $chars = ['#', '%', '+', '*', '@', '裡'];
        $colors = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F'];
        $arr10 = [];
        for ($i=0; $i < 10; $i++) { 
            $arr10[]=[];
            for ($k=0; $k < 10 ; $k++) { 
                $color = '#';
                for ($c=0; $c <6 ; $c++) { 
                    $color .= $colors[rand(0, 15)];
                }
                $arr10[$i][]=[$chars[rand(0, 5)], $color ];
            }
        }
        foreach($arr10 as $subArr){
            foreach($subArr as $element){
                echo '<span style="color:' . $element[1] . '">' . $element[0] . '</span>';
            }
            echo '<br/>';
        }

    ?>
</p>
<p>11.Duotas kodas, generuojantis masyvą:<br/>
Reikia apskaičiuoti kiek buvo $sk1 ir $sk2 naudojantis matematika.<br/>
NEGALIMA! naudoti jokių palyginimo operatorių (if-else, match, swich, ()?:)<br/>
NEGALIMA! naudoti jokių regex ir string funkcijų.<br/>
GALIMA naudotis tik aritmetiniais veiksmais ir matematinėmis funkcijomis iš skyrelio: https://www.php.net/manual/en/ref.math.php<br/>
<br/>
Jeigu reikia, kodo patogumui galima panaudoti įvairias funkcijas, bet sprendimo pagrindas turi būti matematinis.<br/>
<br/>
Atsakymą reikia pateikti formatu:<br/>
echo 'Skaičius 789 yra pakartotas '.$sk1.' kartų, o skaičius 123 - '.$sk2.' kartų.';<br/>
<br/>
Kur rudi skaičiai yra pakeisti skaičiais $a ir $b generuojamais kodo.<br/>
</p>
<p class='solution'>
    <?php
        do {
            $a = rand(0, 1000);
            $b = rand(0, 1000);
        } while ($a == $b);
        $long = rand(10,30);
        $sk1 = $sk2 = 0;
        echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
        $c = [];
        for ($i=0; $i<$long; $i++) {
            $c[] = array_rand(array_flip([$a, $b]));
        }
        echo '<h4>Masyvas:</h4>';
        echo '<pre>';
        print_r($c);
        echo '</pre>';
    ?>
</p>
</body>
</html>