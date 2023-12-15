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
        $start = srtpos()
    ?>
    </p>

</body>
</html>