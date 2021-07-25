<style>

    .zalia {
        background-color: green;
    }

    .raudona {
        background-color: red;
    }

</style>



<?php 

// tikrinam ar kintamieji egzistuoja ir yra ne tusti (su !) 
// kintamuju isvedimas su GET (per nuoroda) arba POST (nematomas)
// atliekami veiksmai
// isvedamas rezultatas

$rezultatoZinute= "" ; 
$rezultatoKlase= ""; 

if (isset($_GET["krastinea"]) && !empty($_GET["krastinea"]) && isset($_GET["krastineb"]) && !empty($_GET["krastineb"]) && isset($_GET["krastinec"]) && !empty($_GET["krastinec"]) ) {
    
    $rezultatoKlase= "zalia"; 
    
    $krastinea= $_GET["krastinea"];
    $krastineb= $_GET["krastineb"];
    $krastinec= $_GET["krastinec"];

    if ($krastinea+$krastineb>$krastinec && $krastinea+$krastinec>$krastineb && $krastineb+$krastinec>$krastinea ) {
        
        // krastine
        
        if ($krastinec==$krastineb && $krastineca == $krastineb && $krastinea == $krastinec) {
            $rezultatoZinute= "trikampis yra lygiakrastis";
        } else if ($krastinec==$krastineb || $krastinea== $krastineb || $krastinea== $krastinec) {
            $rezultatoZinute= "trikampis yra lygiasonis";
        } else {
            $rezultatoZinute= "trikampis yra ivairiakrastis";
        }

        // kampai 
    
        if ($krastinec*$krastinec==$krastinea*$krastinea + $krastineb*$krastineb) {
            $rezultatoZinute .= "<br>trikampis yra statusis";
        } else if ($krastinec*$krastinec>$krastinea*$krastinea+$krastineb*$krastineb) {
            $rezultatoZinute .= "<br>trikampis yra bukasis";
        } else {
            $rezultatoZinute .= "<br>trikampis yra smailusis";
    }


    } else {
        $rezultatoZinute = "tikampio sudaryti negalima"; 
    }

    
} else {
    $rezultatoKlase= "raudona"; 
    $rezultatoZinute= "kazkas negerai, reikia patikrinti kintamuosius"; 
}

?>

<div class="zinute" <?php  echo $rezultatoKlase ?>>
    <?php echo $rezultatoZinute; ?>
</div>