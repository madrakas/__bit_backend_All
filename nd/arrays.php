<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <link rel="stylesheet" href="./nd.css">
</head>
<body>
<h1>Stringai (movie edition)</h1>    
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
            $arr1[] = getrand($arr2);
        }

        function getrand($array){
            $found = false;
            while ($found === false ){
                
            }
        }
        ?>
    </p>
</body>
</html>