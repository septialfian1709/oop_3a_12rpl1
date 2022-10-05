<?php
// const
define("phi", 3.14);

// sisi miring kerucut
$a = pow(5,2);
$b = pow(7.2,2);
$c = sqrt($a+$b);
echo 'sisi miring kerucut =' .round($c,1)."m\n";

// volume tabung
$r = 7.2;
$tTabung = 20;
$volTabung = phi*pow($r, 2)*$tTabung;
echo 'volume tabung =' .round($volTabung,1)."m3\n";

// volume kerucut v=1/3 phi*r2*t
$tKerucut = 5;
$volKerucut = (phi*pow($r,2)*$tKerucut)/3;
echo 'volume kerucut =' .round($volKerucut,1). "m3\n";

// luas alas yang hilang
$LAlas = phi*pow($r,2)/100;
echo 'luas alas hilang =' .round($LAlas,1). "m3\n";

// total
$totalvolume = $volTabung+$volKerucut-$LAlas;
echo 'total volume =' .round($totalvolume,1). "m3\n";
?>