<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcijos</title>
    <link rel="stylesheet" href="./nd.css">
</head>
<body>
<h1>Funkcijos</h1>    
<p>1. Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą.</p>
<div class='solution'>
    <?php
     function heading1Text($string){
        return "<h1>$string</h2>";
     }
     echo heading1Text('Labas rytas');
    ?>
</div>
<p>2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją.</p>
<div class='solution'>
    <?php
     function headingText($string, $headingLevel){
        if ($headingLevel > 6){
            $headingLevel = 6;
        }
        if ($headingLevel < 0){
            $headingLevel = 1;
        }

        return "<h$headingLevel>$string</h$headingLevel>";
     }
     echo headingText('Labas rytas', 3);
    ?>
</div>
<p>3. Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();</p>
<div class='solution'>
    <?php
    $str3 = md5(time());
    $whitelist = '0123456789' ;
    $result = '';
    $num='';
    for($i=0; $i < strlen($str3); $i++){
        $char = substr($str3, $i, 1);
        if (str_contains($whitelist, $char)){
            $num .= $char;
        }else{
            if ($num !== ''){
                $result .= heading1Text($num);
                $num = '';
            }
            $result .= $char;
        }
    }
    echo $result;
    ?>
</div>
<p>4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;</p>
<div class='solution'>
    <?php
        function wholeDividersCount($num4){
            if (!is_int($num4)){
                return -1;
            } 
            if ($num4 > 0){
                $x = -1;
            }elseif ($num4 < 0){
                $x = 1;
            }else{
                return -1;
            }
            $result = 0;

            for ($i=$num4 + $x; $i !== $x * -1; $i += $x) { 
                if ($num4 % $i === 0){
                    $result++;
                }
            }
            return($result);
        }

        echo '1000 can be divided by ' . wholeDividersCount(1000) . ' numbers.';
    ?>
</div>
<p>5. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.</p>
<div class='solution'>
    <?php
        $arr5 = [];
        for ($i=0; $i < 100 ; $i++) { 
            $arr5[] = rand(33, 77);
        }
        usort($arr5, function($a, $b){
            return (wholeDividersCount($b) <=> wholeDividersCount($a));
        });
        echo '<pre>';
        print_r($arr5);
        echo '</pre>';

    ?>
</div>
<p>6. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.</p>
<div class='solution'>
    <?php
        $arr6 = [];
        for ($i=0; $i < 100 ; $i++) { 
            $arr6[] = rand(333, 777);
        }
        
        for ($i=0; $i < count($arr6) ; $i++) { 
            if (wholeDividersCount($arr6[$i]) === 0){
                unset($arr6[$i]);
            }
        }

        echo '<pre>';
        print_r($arr6);
        echo '</pre>';

    ?>
</div>
<p>7. Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis - masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;
</p>
<div class='solution' style='width: 100%'>
    <?php
        $Arr7length = rand(10, 30);
        $arr7 = arrGen7(0, $Arr7length);
  
        
        function arrGen7($currlength, $maxLength){
            if ($currlength < $maxLength){
                $currlength++;
                $len= rand(10, 20);
                $subArr = [];
                for ($i=0; $i < $len; $i++) { 
                    if ($i === ($len -1)){
                        $subArr[] = arrGen7($currlength, $maxLength);
                    }else{
                        $subArr[] = rand(10, 30);
                    }
                }
                return $subArr;
            } else{
                return 0;
            }
        }
        
        echo '<pre>';
        print_r($arr7);
        echo '</pre>';

    ?>
</div>
</body>
</html>