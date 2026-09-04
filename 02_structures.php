<?php 
    /*1. if, else, elseif
    2. switch
    3. Ciklusok: for, while, foreach
    4. Ternary operátor ($valtozo = feltétel ? 'igen' : 'nem';)
    5. Tömbök (indexelt, asszociatív, tömbök tömbje)*/



    $szam = 5;
    if ($szam % 2 == 0) {
        print "A ".$szam. "páros.\n <br> \n";
    }
    else {
        print "A ".$szam. "páratlan.\n <br> \n";
    }

    $res = ($szam % 2 == 0) ? "páros" : "páratlan";
    print "A ".$szam. " ".$res.".\n <br> \n";

    print "A ".$szam. ($szam % 2 == 0 ? " páros." : " páratlan.")."\n <br> \n";

    //készits for ciklust ami kiírja a 1-10 számokat
    for ($i = 1; $i <= 10; $i++) {
        print $i . "<br> \n";
    }


    // vegyél fel egy gyümölcsöket tartalmazó tömböt, és írd ki for ciklussal az 5 gyümölcsök nevét
    $gyumolcsok = array("alma", "mangó", "szilva", "meggy", "eper");
    for ($i = 0; $i < count($gyumolcsok); $i++) {
        print "Ez a " . ($i + 1) . ". gyümölcs: " . $gyumolcsok[$i] . "<br> \n";
    }

    foreach ($gyumolcsok as $gyumolcs) {
        print "Ez a gyümölcs: " . $gyumolcs . "<br> \n";
    }