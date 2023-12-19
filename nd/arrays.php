<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <link rel="stylesheet" href="./nd.css">
</head>
<body>
<h1>Masyvai</h1>    
<p>1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
</p>
    <?php echo '<pre>';?>
    <p class='solution'>
    <?php
    $result = [];
    for ($i=0; $i < 30; $i++) { 
        $result[] = rand(5, 25);
    }
    
    print_r($result);
    echo '</pre>';
    ?>
    </p>
    <p>2. Naudodamiesi 1 uždavinio masyvu:<br/>
    a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;<br/>
    b) Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;<br/>
    c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;<br/>
    d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;<br/>
    e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;<br/>
    f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;<br/>
    g) Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;<br/>
    h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;<br/>
    i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;</p>
    <p class='solution'>
        <?php
        function test_odd($var)
        {
            return($var > 10);
        }
              
        echo 'a) >10: ' . count(array_filter($result, "test_odd")) . '<br/>';
        $resultb = $result;
        usort($resultb, fn($a, $b) => $b <=> $a);
        $maxNum = $resultb[0];
        $indexes = [];
        for($i = 0; $i < 30; $i++){
            if ($result[$i] === $maxNum){
                $indexes[] = $i;
            }
        }
        $resultb = implode(', ', $indexes);
        echo "b) Max Number: $maxNum. Indexes: $resultb." . '<br/>';

        $csum = 0;
        for ($i=0; $i < count($result) - 1; $i += 2) { 
            $csum += $result[$i];
        }
        echo 'c) Even indexes sum: ' . $csum . '.<br/>';

        $resultb = $result;
        for ($i=0; $i < count($result) - 1; $i++) { 
            $resultb[$i] = $resultb[$i] - $i;
        }
        echo 'd) Values - indexes: [' .implode(', ', $resultb) . ']<br/>';
        for ($i=0; $i < 10; $i++) { 
            $result[] = rand(5, 25);
        }
        echo 'e) New array length: ' . count($result) . '<br/>';
        // echo '<pre>';
        // print_r($result);

        $arr1=[];
        $arr2=[];
        
        for ($i=0; $i < count($result) ; $i += 2) { 
            $arr1[] = $result[$i];
            $arr2[] = $result[$i + 1];
        }
        echo 'f) arr1: [' . implode(', ', $arr1) . '].<br>';
        echo 'arr2: [' . implode(', ', $arr2) . '].<br>';

        for ($i=0; $i <count($result); $i += 2) { 
            if($result[$i] > 15){
                $result[$i] = 0;
            }
        }
        echo 'g) Initial array: [' . implode(', ', $result) . '].<br/>';

        for ($i=0; $i < count($result); $i++) { 
            if ($result[$i] > 10){
                echo "h) index = $i; value = $result[$i].<br/>";
                break;
            }
        }

        $resultLength = count($result);
        for ($i=0; $i < $resultLength; $i += 2) { 
            unset($result[$i]);
        }
        echo 'i) removed even indexes: [' . implode(', ', $result) . '].<br/>';
        ?>
    </p>
    <p>3. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.</p>
    <p class='solution'>
        <?php 
            $result = [];
            $letters = ['A', 'B', 'C', 'D'];
            for ($i=0; $i < 200; $i++) { 
                $result[] = $letters[rand(0, 3)];
            }
            echo '[' . implode(', ', $result) . ']<br/>';
            $counts = array_count_values($result);
            echo "A: $counts[A], B: $counts[B], C: $counts[C], D: $counts[D]";
        ?>
    </p>

    <p>4. Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.</p>
    <p class='solution'>
        <?php
        usort($result, fn($a, $b) => $a <=> $b);
        echo '[' . implode(', ', $result) . ']<br/>';
        ?>
    </p>
    <p>5. Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.</p>
    <p class='solution'>
        <?php
            $arr1 = [];
            $arr2 = [];
            $arr3 = [];
            $arr4 = [];
            for ($i=0; $i < 200; $i++) { 
                $arr1[] = $letters[rand(0, 3)];
                $arr2[] = $letters[rand(0, 3)];
                $arr3[] = $letters[rand(0, 3)];
            }
            for ($i=0; $i < count($arr1); $i++) { 
                $arr4[] = $arr1[$i] . $arr2[$i]  . $arr3[$i];
            }
            
            echo 'Array of triplets: [' . implode(', ', $arr4) . '].<br/><br/>';
            $counter1 = array_count_values($arr4);
            echo 'Unique triplets: [' . implode(', ', array_keys($counter1)) . '].<br/><br/>';
            $counter2 = $counter1;
            
            echo 'Unique triplets count: ' . count($counter1) . '<br/><br/>';;
            // ABC
            // ABD
            // ACD
            // BCD

            $counter2 = array_filter($counter2, function($key) {
                return (str_contains($key, 'A') && str_contains($key, 'B') && str_contains($key, 'C')) ||
                (str_contains($key, 'A') && str_contains($key, 'B') && str_contains($key, 'D')) ||
                (str_contains($key, 'A') && str_contains($key, 'C') && str_contains($key, 'D')) ||
                (str_contains($key, 'B') && str_contains($key, 'C') && str_contains($key, 'D'));
            }, ARRAY_FILTER_USE_KEY);
            
            echo 'Unique triplets with unique parts: [' .implode(', ', array_keys($counter2)) . ']<br/><br/>';
            echo 'Unique triplets with unique parts count: ' . count($counter2) . '<br/>';
        ?>
    </p>
    <p>6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).</p>
    <p class='solution'>
        <?php
        $arr1 = [];
        $arr2 = [];

        for ($i=0; $i < 100 ; $i++) { 
            $arr1[] = getrand($arr1);
            $arr2[] = getrand($arr2);
        }

        function getrand($array){
            $randNum = null;
            while ($randNum === null ){
                $newNum = rand(100, 999);
                if(in_array($newNum, $array) !== true ){
                    $randNum = $newNum;
                }
            }
            return $randNum;
        }

        echo 'Arr1: [' . implode(', ', $arr1) . ']<br/><br/>';
        echo 'Arr2: [' . implode(', ', $arr2) . ']<br/>';
        ?>
    </p>
    <p>7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.</p>
    <p class='solution'>
        <?php
            $arr3 = [];
            for ($i=0; $i <count($arr1) ; $i++) { 
                if (!in_array($arr1[$i], $arr2)){
                    $arr3[] = $arr1[$i];
                }
            }
            echo 'Arr3: [' . implode(', ', $arr3) . ']<br/>';
        ?>
    </p>
    <p>8. Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.</p>
    <p class='solution'>
        <?php
            $arr4 = [];
            for ($i=0; $i <count($arr1) ; $i++) { 
                if (in_array($arr1[$i], $arr2)){
                    $arr4[] = $arr1[$i];
                }
            }
            echo 'Arr4: [' . implode(', ', $arr4) . ']<br/>';
        ?>
    </p>
    <p>9. Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.</p>
    <p class='solution'>
        <?php
            $arr5 = [];
            for ($i=0; $i <count($arr1) ; $i++) { 
                $arr5[$arr1[$i]] = $arr2[$i];
            }
            print_r ($arr5);
        ?>
    </p>
    <p>10. Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.
    </p>
    <p class='solution'>
        <?php
        $arr6 = [];
            for ($i=0; $i <10 ; $i++) { 
                if ($i < 2) {
                    $arr6[] = rand(5, 25);
                }else{
                    $arr6[] = $arr6[($i - 2)] + $arr6[$i - 1];
                }
            }
            echo 'Arr6: [' . implode(', ', $arr6) . ']<br/>';
        ?>
    </p>
    <p>11. Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip, kad visos reikšmės masyve būtų unikalios. Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo viduryje, o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės). Jeigu sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite. (Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30).</p>
    <p class='solution'>
        <?php
            $arr7 = [];
            for ($i=0; $i <101 ; $i++) { 
                    $arr7[] = rand(0, 300);
            }
            echo 'Arr7: [' . implode(', ', $arr7) . ']<br/><br/>';

            $arr7NotUniqs =   array_filter(array_count_values($arr7), fn($a) => $a > 1);
            foreach(array_keys($arr7NotUniqs) as $key){
                for ($i=1; $i < $arr7NotUniqs[$key]; $i++){ // last duplicate wont be replacec as it's not a duplicate anymore
                    $id = array_search($key, $arr7);
                    $arr7[$id] = getrand($arr7);
                }
            }
            echo 'Arr7 no duplicates: [' . implode(', ', $arr7) . ']<br/>';
            usort($arr7, fn($a, $b) => $b - $a);
            
            $max = $arr7[0];
            $arr1 = [];
            $arr2 = [];
            for($i=1; $i < 101; $i += 2){
                $arr1[] = $arr7[$i];
                $arr2[] = $arr7[$i + 1];
            }


            if (array_sum($arr1) > array_sum($arr2)){
                $arrSumDif = array_sum($arr1) - array_sum($arr2); 
            } else{
                $arrSumDif = array_sum($arr2) - array_sum($arr1); 
            }

            while ($arrSumDif > 30){
                $fix = arraysrevamp($arr1, $arr2);
                $arr1 = $fix[0];
                $arr2 = $fix[1];

                if (array_sum($arr1) > array_sum($arr2)){
                    $arrSumDif = array_sum($arr1) - array_sum($arr2); 
                } else{
                    $arrSumDif = array_sum($arr2) - array_sum($arr1); 
                }
            }

            function arraysrevamp($a1, $a2){
                for ($i=0; $i < count($a1); $i++) { 
                
                    $a = $a1[$i];
                    $b = $a2[$i];
                    $a1[$i] = $b;
                    $a2[$i] = $a;
                    if (array_sum($a1) > array_sum($a2)){
                        $arrSumDif = array_sum($a1) - array_sum($a2);
                    } else{
                        $arrSumDif = array_sum($a2) - array_sum($a1);
                    }
    
                    if ($arrSumDif < 31){
                        return [$a1, $a2];
                    }
                }    
                return [$a1, $a2];
            }

            usort($arr1, fn($a, $b) => $a <=> $b);
            usort($arr2, fn($a, $b) => $b <=> $a);

            $result = array_merge($arr1, [$max], $arr2);
            echo 'Arr7 sort sum < 31: ' . implode(', ', $result) . '<br/>';
            echo 'Arrays Sum diference: ' . $arrSumDif; 
            
        ?>
    </p>
</body>
</html>