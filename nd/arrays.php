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
    <p>Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.</p>

</body>
</html>