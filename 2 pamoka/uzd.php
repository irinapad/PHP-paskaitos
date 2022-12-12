<?php
declare(strict_types=1);

/*
1. Pašalinkite/užkomentuokite praeitos užduoties eilutes, kad jos netrukdytų toliau tęsti darbo.
Išveskite į terminalą kintamojo $variableToDebug:
- tik reikšmę
- reikšmę kartu su duomens tipu
*/
$variableToDebug = 15;
echo $variableToDebug;
echo PHP_EOL;
var_dump ($variableToDebug);
echo PHP_EOL;

/*
2. Sudėliokite masyvą ir jį atspausdinkite iš šių reikšmių:
- Hello
- Learning
- Amazing
- CodeAcademy
- Php
- Git
*/
var_dump (['Hello','Learning','Amazing','CodeAcademy','Php','Git']);
/*
3. Pakeiskite duotų kintamųjų reikšmes į:
- int
- bool
*/

//pakeisti i int:
$variable1 = false;
$variable2 = true;
$variable3 = '2022 year';
$variable1 = (int) $variable1;
$variable2 = (int) $variable2;
$variable3 = (int) $variable3;
var_dump ($variable1);
echo PHP_EOL;
var_dump ($variable2);
echo PHP_EOL;
var_dump ($variable3);
echo PHP_EOL;


//pakeisti i bool:
$variable4 = 150;
$variable5 = [];
$variable6 = 'Year - 2022';
$variable4 = (bool) $variable4;
$variable5 = (bool) $variable5;
$variable6 = (bool) $variable6;
var_dump ($variable4);
echo PHP_EOL;
var_dump ($variable5);
echo PHP_EOL;
var_dump ($variable6);
echo PHP_EOL;

/*
4. Atlikite šiuo loginius operatorius su duotais kintamaisiais taip, kad gautumėt true ir false
- &&
- ||
*/

$variable7 = 145;
$variable8 = '145';
$variable9 = '150';
$variable10 = 150;
var_dump ($variable7 && $variable8);
echo PHP_EOL;
var_dump (!($variable9 || $variable10));
echo PHP_EOL;

/*
5. Atlikite siuos skaiciavimus, panaudodami kintamuosius
- 143 * 444
- 567 / 12
- 578 % 55
- 6 ** 5
- 5--;
- 6++;
*/
$a = 143;
$b = 144;
var_dump ($a * $b);
echo PHP_EOL;
$c = 567;
$d = 12;
var_dump ($c / $d);
echo PHP_EOL;
$e = 578;
$f = 55;
var_dump ($e % $f);
echo PHP_EOL;
$g = 6;
$h = 5;
var_dump ($g ** $h);
echo PHP_EOL;
var_dump (--$h);
echo PHP_EOL;
var_dump (++$g);
/*
6. Parasykite koda, kad jis patikrintu ar:
- 56 > 77
- 190 <= 230
- 230 yra lygu '230'
- 45 nera lygu '45
*/
var_dump(56 > 77);
echo PHP_EOL;
var_dump(190 <= 230);
echo PHP_EOL;
var_dump(230 == '230');
echo PHP_EOL;
var_dump(45 === '45');

/*
7. Parasykite koda, kad jis ar reiksme egzistuoja
- pasirasykite kintamaji $variable = 10; patikrinkite ar jis egzistuoja;
- jeigu egzistuoja patikrinkite koks jo tipas
- istrinkite jo apsirasyma ir patikrinkite ar egzistuojate. kokia reiksme gaunate? ar gaunate error?
*/
$variable = 10;
var_dump(isset($variable));
var_dump($variable);


//  PAPILDOMOS
// 1. Sukurkite konstantą WEBSITE_ADDRESS, reikšmėje nurodykite google.com adresą
define('WEBSITE_ADDRESS', 'google.com');
var_dump(WEBSITE_ADDRESS);

// 2. Palyginkite reikšmes 200 ir '200' taip, kad:
//   a) gautume true
//   b) gautume false
var_dump(200 == '200');
echo PHP_EOL;
var_dump(200 === '200');
// 3. Patikrinkite ar galime sujungti du skaičius kaip string duomenis (string sujungimui naudojame taško simbolį)
$x = 1;
$y = 4;
var_dump(1.4, 1 . 4, $x.$y);