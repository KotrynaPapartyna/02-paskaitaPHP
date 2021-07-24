<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02-paskaita</title>
</head>
<body>

<?php 
    // operatoriai ir matematiniai veiksmai

    // kintamieji

    $sk1=10;
    $sk2=15; 

    // suma 
    $suma= $sk1+$sk2; 
    echo $suma; 

    echo "<br>"; 

    // skirtumas
    $skirtumas= $sk1-$sk2; 
    echo $skirtumas;

    echo "<br>"; 

    // daugyba
    $daugyba= $sk1*$sk2; 
    echo $daugyba;

    echo "<br>"; 

    // dalyba su liekana 
    $dalyba= $sk1/$sk2; 
    echo $dalyba;

    echo "<br>"; 

    // dalyba be liekanos- tik su sveika dalim 
    $dalybosSveikojiDalis=intval($dalyba); // intval- sveikojo skaiciaus reiksme 
    // (()- skaicius- is kurio norima pasiimti sveikaja dali)
    echo "<br>";
    echo $dalybosSveikojiDalis;

    // liekana
    $liekana=$sk1%$sk2;
    echo "<br>";
    echo $liekana; 

    // kvadratine saknis
    $kvadratineSaknis=sqrt($sk1); // traukiama is pirmojo skaiciaus- 10 
    echo "<br>";
    echo $kvadratineSaknis; 

    //kelimas laipsniu
    $kelimasLaipsniu=$sk1**$sk2; // 10*15
    echo "<br>";
    echo $kelimasLaipsniu; 

    // traukiame bet kokio laipsnio sakni 

    $sk1=16; 
    $ntojiSaknis= $sk1**(1/4); 
    echo "<br>";
    echo $ntojiSaknis; 

    $veiksmas= 2*(2+2); //jeigu be ()- skaiciuojama is eiles, kitu atveju-matematiska logika
    echo "<br>";
    echo $veiksmas; 

    







?>
    
</body>
</html>