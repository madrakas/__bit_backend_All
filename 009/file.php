<?php
$fileContent = file_get_contents('https://vz.lt');
$fileContent = str_replace('Prenumeruoti', 'Bebrai Jėga', $fileContent);
echo $fileContent;