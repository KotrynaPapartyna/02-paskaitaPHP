<?php

// $_POST- nematomas, "skaicius1"- name is input laukelio 
// '' ir "" itakos neturi 

// isser- ar egzistuoja
// empty - ar nera tuscias !- kad ne tuscias

if (isset($_GET["skaicius1"]) && !empty($_GET["skaicius1"]) && isset($_GET["skaicius2"]) && !empty($_GET["skaicius2"]) ) {
    $pirmas=$_GET["skaicius1"];
    $antras=$_GET["skaicius2"]; 
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
} else {
    echo "kazkas negerai, kintamieji yra tusti arba neegzistuoja"; 
}

?>