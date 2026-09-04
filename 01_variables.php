<?php
    /*2. <?php ?> szintaxis
    3. Változók, konstansok ($vezetekNev, define)
    4. Adattípusok (string, int, float, bool, array)
    5. Egyszerű kiírás (echo (print), printf, sprintf, print_r, var_dump)*/

    $i = 10;
    $f = 3.14;
    $b = true;
    $s = "Bence";

    var_dump($i);
    var_dump($f);
    var_dump($b);
    var_dump($s);

    $x = 3;
    $y = "5";
    $z = $y +$x;
    print $z;
    $a = [1,2,3];
    var_dump($a);

    echo "<br> \n";

    //mirit ki?
    $messaga = "egy";

    print "Kiír ".$messaga." érteket.";
    print "<br> \n Kiír $messaga értéket.";
    print "<br> \n Kiír $messaga értéket.";

    echo "<br> \n Kiír ",$messaga," érteket.";

    $ar = 1500.5;
    printf("<br> \n Az ár : %.2f Ft <br> \n",$ar);

    $szam = 7;
    $kod = sprintf("Azon-%04d",$szam);
    print $kod;