<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02-paskaita</title>
</head>
<body>

    <!-- visi duomenys, kurie turi buti perduodami php'e- reikia htmle- <form>--> 
    <!-- turi buti action ir method-->
    <!-- method turi buti du- post- nematoma, get (matoma)- informacija perduodama per nuoroda-->
    <!-- su metodu get- galima keisti reiksmes nuorodoje-->
    <!-- action- atskiras php failas-->


    <form action="veiksmas.php" method="get">
        <input type="text" value="115" name="skaicius1"/>
        <input type="text" value="115" name="skaicius2"/>
        <button type="submit">Patvirtinti</button>
    </form>

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

<?php 
 // tekstas + skaicius - rodoma klaida- aritmetika tokiu atveju neveikia - reikia .

 $skaicius=205;
 $tekstas="labas";
 $suma=$skaicius . $tekstas; // vietoj + reikia . 
 
 echo "<br>";
 echo $suma;

 $tekstas1= "labas";
 $tekstas2= "ate"; 

 $sujunk=$tekstas1 . $tekstas2;
 echo "<br>";
 echo $sujunk;
?>

<?php
 $a= 2;
 $b=5; 

 $a=$b; //  a=5 

 // sutrumpinimas

 $a +=$b; // $a= $a + $b // bus 10, nes a- prilyginta yra b
 $a -=$b; // $a= $a - $b // bus 5, nes a- prilyginta yra b
 $a *=$b; // $a= $a * $b // 25
 $a /=$b; // $a= $a / $b // 5
 $a %= $b;  //$a= $a % $b // 0

//i++ JS
 $a++; //  bus 1- prie 0 prisideda 1
 $b--; // 4- nes b yra lygus 5,ir -1 
 
?>


<?php

// salygos sakinys irgi su IF kaip ir JS 
$ska=12; 
$skb=5;

// uzdavinys- jeigu sk>skb- tuomet atvaizduojama suma, kitu atveju- sandauga
if($ska>$skb) {
     $suma=$ska+$skb; 
     echo $suma; 
} else {
    $sandauga=$ska*$skb;
    echo $sandauga;
}

// patikrinti ar trikampis yra statusis, bukasis ar smailusis

$a=3;
$b=4;
$c=5; 

if ($c*$c==$a*$a + $b*$b) {
    echo "trikampis yra statusis";
} else if ($c*$c>$a*$a+$b*$b) {
    echo "trikampis yra bukasis";
} else {
    echo "trikampis yra smailusis";
}

// suprogramuoti skripta, kuris rastu didziausia skaiciu is dvieju 
//rezultatas isvedamas disabled (neaktyvame) input laukelyje
// abu skaiciai paimami is dvieju skirtingu input laukeliu 

$pirmas=102;
$antras=102; 
$maksimalus=0; 

if ($pirmas>$antras) {
    $maksimalus=$pirmas; 
} else if($pirmas<$antras) {
    $maksimalus=$antras;
} else {
    $maksimalus= "abu skaiciai yra lygus";
}

echo "<br>";
// ISVEDIMAI- GALIMA RINKTIS VIENA IS TRIJU 

// 1 budas- input sukuriamas skripte , kad atsirastu reiksme- reikia value
// i tekstine eilute - value- irasomas kintamojo- atsakymo- pavadinimas
echo "<input class='neaktyvus' disabled='true' value='$maksimalus'/>"; 

// 2 budas
// su . priekyje ir pabaigoje ir ""
echo "<input class='neaktyvus' disabled='true' value='".$maksimalus."'/>"; 

?>
<!-- 3 budas
// input kuriamas html po visu aprasymu, po php bloku, ikeliant ji i vidu--> 

<input class='neaktyvus' disabled='true' value='<?php echo $maksimalus; ?>'/>









    
</body>
</html>