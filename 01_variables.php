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