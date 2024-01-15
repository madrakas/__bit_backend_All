<?php
    require __DIR__ . '/TV.php';

    $tv1 =new Tv('Samsung', 'Petras');
    $tv2 =new Tv('LG', 'Bebras');
    $tv3 =new Tv('Sony', 'Ona');

    $naujiKanalai = ['MTV', 'CNN', 'Discovery', 'Cartoon network'];
    
    $tv1->perjungtiPrograma(1);
    $tv2->perjungtiPrograma(2);
    $tv3->perjungtiPrograma(3);

    $tv4 =new Tv('Panasonic', 'Jonas');
    
    // Tv::$kanalai($naujiKanalai); // Jei savybė public
    Tv::keistiKanalus($naujiKanalai); // Jei savybė private
    
    $tv1->perjungtiPrograma(1);
    $tv2->perjungtiPrograma(2);
    $tv3->perjungtiPrograma(3);
    $tv4->perjungtiPrograma(3);

    $tv2->hack('Ona');

    $tv1->kaRodo();
    $tv2->kaRodo();
    $tv3->kaRodo();
    $tv4->kaRodo();