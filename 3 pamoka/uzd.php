<?php
declare(strict_types=1);

/*
1. Apskaičiuokite PHP pagalba ir išveskite į terminalą. Kiekvienas rezultatas turi būti naujoje eilutėje:
987 + 545 - 32 * 94
32 pakelkite laipsniu 3 ir pridėkite 18
120 padalinkite iš 4 ir dar karta padalinkite iš 3
kokia liekana lieka po skaičiaus 187 dalybos iš 5
skaičiui 3 tris kartus pritaikykite increment operatorių - koki skaičių gaunate?
skaičiui 12 keturis kartus pritaikykite decrement operatorių - koki skaičių gaunate?
*/

/*var_dump(987 + 545 - 32 * 94);
echo PHP_EOL;
var_dump(32 ** 3 + 18);
echo PHP_EOL;
var_dump(120 / 4 / 3);
echo PHP_EOL;
var_dump(187 % 5);
echo PHP_EOL;
$i = 3;
$i++;
$i++;
$i++;
var_dump($i);
echo PHP_EOL;
$j = 12;
$j--;
$j--;
$j--;
$j--;
var_dump($j); */


/*
2. Išspausdinkite skaičius nuo 1 iki 10 naudodamiesi ciklu. Panaudokite visus 4 būdus ciklams aprašyti.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
1
2
3
...
*/

/*$b = 1;
while ($b < 11) {
    echo $b;
    $b++;
    echo PHP_EOL;
} */

/*$b = 1;
do {
    echo $b;
    $b++;
    echo PHP_EOL;
} while ($b < 11); */

/* for ($b = 1; $b < 11; $b++) {
    echo $b.PHP_EOL;
} */


/*
3. Išspausdinkite skaičius nuo 15 iki 3 naudodamiesi ciklu. Panaudokite sau patogiausią ciklą.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

/*for ($c = 15; $c >= 3; $c--) {
    echo $c.PHP_EOL;
}*/


/*
4. Išspausdinkite kas antrą skaičių nuo 1 iki 20 naudodamiesi ciklu.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
1
3
5
...
*/

/*for ($d = 1; $d <= 20; $d += 2) {
    echo $d.PHP_EOL;
}*/


/*
5. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

/*for ($x = 1; $x < 20; $x++)
if ($x % 3 == 0) {
    echo $x . PHP_EOL;
} else {
    continue;
}*/


/*
6. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3 arba iš 5.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

/*for ($y = 1; $y <= 20; $y++)
    if (($y % 3 == 0) || ($y % 5 == 0)) {
        echo $y.PHP_EOL;
    } else {
        continue;
    }*/


/*
7. Iteruokite per skaičius, nuo 1 iki 20.
Jeigu skaičius dalijasi iš 3, išspausdinkite žodį 'Hey'.
Jeigu skaičius dalijasi iš 5, išspausdinkite žodį Ho'.
Jeigu skaičius dalijasi ir iš 5, ir iš 3, išspausdinkite žodį 'HeyHo'.
Kitu atveju išspausdinkite skaičių.
Viskas turi būti atspausdinti vienoje eilutėje su tarpais:
1 2 Hey 4 Ho Hey 7 8 Hey Ho 11 Hey 13 14 HeyHo 16 17 Hey 19 Ho
*/

/*$z = 1;
while ($z < 21) {
    if (($z % 3 == 0) && ($z % 5 == 0)) {
        echo "HeyHo ";
    } elseif ($z % 5 == 0) {
        echo "Ho ";
    } elseif ($z % 3 == 0) {
        echo "Hey ";
    } else {
        echo $z.' ';
    };
    $z++;
}
echo PHP_EOL;*/


/*
8. Raskite sveikų skaičių nuo 1 iki 100 sumą.
*/

/*$sum = 0;
for ($s = 1; $s < 101; $s++) {
    $sum = $sum + $s;
}
echo $sum;*/


/*
9. Pasinaudodami ciklu išspausdinkite savaitės dienas iš masyvo $days vienoje eilutėje:
monday-tuesday-wednesday-thursday-friday-saturday-sunday-
*/

/*$days = [
    'monday',
    'tuesday',
    'wednesday',
    'thursday',
    'friday',
    'saturday',
    'sunday',
];
foreach ($days as $day) {
    echo $day.'-';
}*/


/*
10. Iteruokite sveikus skaičius nuo -5 iki 5.
Išspausdinkite skaičių dvejopai:
1. Pasinaudojant paprastu echo
2. Pasinaudojant funkcija var_dump ir prieš tai pavertus į 'bool' tipo reikšmę
-5
bool(true)
-4
bool(true)
...
HINT: atkreipkite dėmesį į ką pavirsta skaičius 0
*/

for ($i = -5; $i <= 5; $i++) {
    echo $i.PHP_EOL;
    var_dump((bool) $i);
}