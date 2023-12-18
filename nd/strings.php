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
<p>1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.</p>
    <p class='solution'>
    <?php
        $name = 'Jack';
        $surname = 'Nicholson';
        
        echo "$name $surname <br/>---------------<br/>"; 

        if (strlen($name) > strlen($surname)){
            echo $name;
        } elseif(strlen($name) < strlen($surname)) {
            echo $surname;
        }else{
            echo "$name $surname";
        }

    ?>
    </p>
    <p>2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.</p>
    <p class= solution>
    <?php 
        $name = 'Jack';
        $surname = 'Nicholson';
        
        echo strtoupper($name). ' ' . strtolower($surname);
    ?>
    </p>
    <p>3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.</p>
    <p class='solution'>
    <?php    
        $name = 'Jack';
        $surname = 'Nicholson';

        $result = mb_substr($name, 0, 1) . mb_substr($surname, 0, 1);
        echo $result;
    ?>
    <p>4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.</p>
    <p class='solution'>
    <?php    
        $name = 'Jack';
        $surname = 'Nicholson';

        $result = mb_substr($name, strlen($name) - 1, strlen($name)) . mb_substr($surname, strlen($surname) - 1, strlen($surname));
        echo $result;
    ?>
    </p>
    <p>5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.</p>
    <p class='solution'>
    <?php
        $string = "An American in Paris";
        $string = str_replace('A', '*', $string);
        $string = str_replace('a', '*', $string);
        echo $string;
    ?>
    </p>

    <p>6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.</p>
    <p class='solution'>
    <?php
        $string = "An American in Paris";
        $string = strtolower($string);
        $count = substr_count($string, 'a');
        echo $count;
    ?>
    </p>

    <p>7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.</p>
    <p class='solution'>
    <?php
        $string1 = "An American in Paris";
        $string2 = "Breakfast at Tiffany's";
        $string3 = "2001: A Space Odyssey";
        $string4 = "It's a Wonderful Life";
                
        function removeSylables($input) :string {
            $blacklist= 'AEIOUYaeiouy';
            $Output = '';
            for ($i=0; $i < strlen($input); $i++) { 
                // echo (mb_substr($input, $i, 1));
                if (str_contains($blacklist, mb_substr($input, $i, 1))){

                }else{
                    $Output .=  mb_substr($input, $i, 1);
                }
            }
            return $Output;
        }

        echo removeSylables($string1) . ' | ' . removeSylables($string2) . ' | ' . removeSylables($string3) . ' | ' . removeSylables($string4);
    ?>
    </p>
    <p>8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.</p>
    <p class='solution'>
    <?php
        $string = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
        echo $string;
        echo ('<br/>------------<br/>');
        $start = 19;
        $end = strlen($string) - 13;
        $len = $end - $start;
        $result = mb_substr($string, $start, $len );
        $result = str_replace(' ',  '', $result);
        echo $result;
    ?>
    </p>

    <p>9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.</p>
    <p class='solution'>
    <?php
    $string = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood ";
    $string2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale ";
   
    function wordCounter($input){ 
        $wordcounter =  0;
        $lettercounter = 0;
        $words = '';
        $word = '';
        for ($i=0; $i < strlen($input) ; $i++) { 
            if (mb_substr($input, $i, 1) === ' '){
                if ($lettercounter <= 5){
                    $words = $words . ' ' . $word;
                    $wordcounter++;
                    
                }
                $lettercounter = 0;
                $word = '';
            } else{
                $word = $word . mb_substr($input, $i, 1);
                $lettercounter++;
            }
        }
        echo $wordcounter . ': ' . $words;
    }

    wordCounter($string);
    echo '<br/>';
    wordCounter($string2);
    
    ?>
    </p>

    
    <p>10.Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.</p>
    <p class='solution'>
    <?php
    $letters = "abcdefghijklmnopqrstuvwxyz";
    echo mb_substr($letters, rand(0, strlen($letters) - 1), 1);
    ?>
    </p>

    <p>11. Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo)</p>
    <p class='solution'>
    <?php
    $string1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood ";
    $string2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale ";
    $string2 =  str_replace(',', '', $string2);
    
    $result = '';

    for ($i=0; $i <10 ;) { 
        $randW = randomWord($string1, $string2);
        if (!str_contains($result, $randW)){
            $result .= $randW . ' ';
            $i++;
        }
        
    }

    echo $result;

    function randomWord($string1, $string2){
        $strSel =rand(1,2);
        if ($strSel === 1){
            $mystr =$string1;
        }else{
            $mystr =$string2;
        }
        //counting spaces in string. Solving without arrays.
        $wordCounter = 0;
        for ($i=0; $i < strlen($mystr) ; $i++) { 
            if (mb_substr($mystr, $i, 1) === ' '){
                $wordCounter++;
            }            
        }
        
        //catching rand word
        $wordNum = rand(1, $wordCounter);
        $wordCounter2 = 0;
        $word = '';
        for ($i=0; $i < strlen($mystr) ; $i++) { 
            if (mb_substr($mystr, $i, 1) === ' '){
                $wordCounter2++;
                if ($wordCounter2 === $wordNum)    {
                    return $word;
                }
                $word ='';
            }else{
                $word .= mb_substr($mystr, $i, 1);
            }
        }
    }

    ?>
    </p>
</body>
</html>