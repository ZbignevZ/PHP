<?php
echo '****** 1***********';
echo "<br>";

$vardas = 'Zbignev';
$pavarde = 'Zacharevic';
$manoMetai = 1988;
$sieMetai = 2022;
$amzius = $sieMetai - $manoMetai;

echo "As esu $vardas $pavarde. Man yra $amzius metai";

echo "<br>";
echo '****** 2***********';
echo "<br>";

$firstVariable = rand(0,4);
$secondVariable = rand(0,4);

if($firstVariable > $secondVariable){
    $a = $firstVariable / $secondVariable;
    $skai = round($a,2);
    echo "$skai";
} else{
     $a = $secondVariable / $firstVariable;
     $skai = round($a,2);
     echo "$skai";
}

echo "<br>";
echo '****** 3***********';
echo "<br>";

$variable1 = rand(0,25);
$variable2 = rand(0,25);
$variable3 = rand(0,25);

if($variable1 > $variable2 && $variable1 < $variable3){
    $vidurk = $variable1;
}elseif($variable2 > $variable1 && $variable2 < $variable3){
    $vidurk = $variable2;
}else{
    $vidurk = $variable3;
}

echo "$vidurk";

echo "<br>";
echo '****** 4 ***********';
echo "<br>";
$a = rand(1,10);
$b = rand(1,10);
$c = rand(1,10);
echo "$a  $b $c ";
if ($a > $b && $a > $c){
    $max = $a;
    if($b + $c > $max){
        echo ' Taip galima sudaryti trikampi';
    }else{
        echo 'Ne';
    }
}elseif($a < $b && $b > $c){
    $max = $b;
    if($a + $c > $max){
        echo ' Taip galima sudaryti trikampi';
    }else{
        echo 'Ne';
    }
}else{
    $max = $c;
    if($a + $b > $max){
        echo ' Taip galima sudaryti trikampi';
    }else{
        echo 'Ne';
    }
}

echo "<br>";
echo '****** 5***********';
echo "<br>";

$first5 = rand(0,2);
$second5 = rand(0,2);
$third5 = rand(0,2);
$four5 = rand(0,2);

echo "Skaiciai yra : $first5 $second5 $third5 $four5";
echo "<br>";
$licz0 = 0;
$licz1 = 0;
$licz2 = 0;
if($first5 === 0){
    $licz0++;
}
if($second5 === 0){
    $licz0++;
}
if($third5 === 0){
    $licz0++;
}
if($four5 === 0){
    $licz0++;
}

if($first5 === 1){
    $licz1++;
}
if($second5 === 1){
    $licz1++;
}
if($third5 === 1){
    $licz1++;
}
if($four5 === 1){
    $licz1++;
}

if($first5 === 2){
    $licz2++;
}
if($second5 === 2){
    $licz2++;
}
if($third5 === 2){
    $licz2++;
}
if($four5 === 2){
    $licz2++;
}
echo " 0 yra: $licz0, 1 yra: $licz1, 2 yra: $licz2";

echo "<br>";
echo '****** 6***********';
echo "<br>";

$skaic6 = rand(1,6);

echo "<h$skaic6> $skaic6 </h$skaic6>";


echo "<br>";
echo '****** 7***********';
echo "<br>";

/*Naudokite funkcija rand(). 
Atspausdinkite 3 skai??ius nuo -10 iki 10. 
Skai??iai ma??esni u?? 0 turi b??ti ??ali, 0 - raudonas, didesni u?? 0 m??lyni. 

*/
$septyn1 = rand(-10,10);
$septyn2 = rand(-10,10);
$septyn3 = rand(-10,10);

if($septyn1 < 0){
    echo "<h1 style=color:green> $septyn1 </h1>"; 
}
if($septyn2 < 0){
    echo "<h1 style=color:green> $septyn2 </h1>";
}
if($septyn3 < 0){
    echo "<h1 style=color:green> $septyn3 </h1>";
}

if($septyn1 === 0){
    echo "<h1 style=color:red>$septyn1</h1>";
}
if($septyn2 === 0){
    echo "<h1 style=color:red>$septyn2</h1>";
}
if($septyn3 === 0){
    echo "<h1 style=color:red>$septyn3</h1>";
}

if($septyn1 > 0){
    echo "<h1 style= color:blue>$septyn1</h1>";
}
if($septyn2 > 0){
    echo "<h1 style= color:blue>$septyn2</h1>"; 
}
if($septyn3 > 0){
    echo "<h1 style= color:blue>$septyn3</h1>"; 
}



echo "<br>";
echo '****** 8***********';
echo "<br>";
/* 
??mon?? parduoda ??vakes po 1 EUR.
 Perkant daugiau kaip u?? 1000 EUR taikoma 3 % nuolaida, 
 daugiau kaip u?? 2000 EUR - 4 % nuolaida. 
 Para??ykite program??, kuri skai??iuos ??vaki?? kain??
  ir atspausdint?? atsakym?? kiek ??vaki?? ir kokia kaina perkama. 
  ??vaki?? kiek?? generuokite ???rand()??? funkcija nuo 5 iki 3000. */

  $zvakesKaina = 1;
  $zvakesKaina3proc = 0.97;
  $zvakesKaina4proc = 0.96;
  $zvakiuKiekis = rand(5,3000);
  if($zvakiuKiekis <= 1000){
    $suma =$zvakiuKiekis * $zvakesKaina;
    echo "Kiekis: $zvakiuKiekis kaina uz vnt $zvakesKaina, suma- $suma";
  }
  if($zvakiuKiekis > 1000 && $zvakiuKiekis < 2000){
    $suma =$zvakiuKiekis * $zvakesKaina3proc;
    echo "Kiekis: $zvakiuKiekis kaina uz vnt $zvakesKaina3proc, suma- $suma";
  }

  if($zvakiuKiekis > 2000){
    $suma =$zvakiuKiekis * $zvakesKaina4proc;
    echo "Kiekis: $zvakiuKiekis kaina uz vnt $zvakesKaina4proc, suma- $suma";
  }

  echo "<br>";
  echo '****** 9***********';
  echo "<br>";

  /* Naudokite funkcija rand(). 
  Sukurkite tris kintamuosius su atsitiktin??m reik??m??m nuo 0 iki 100.
   Paskai??iuokite j?? aritmetin?? vidurk??. 
   Ir aritmetin?? vidurk?? atmetus tas reik??mes, 
   kurios yra ma??esn??s nei 10 arba didesn??s nei 90.
    Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skai??iaus.
    */

    $pirmasKintamasis = rand(0,100);
    $antrasKintamasis = rand(0,100);
    $treciasKintamasis = rand(0,100);

    $vidurkis = ($pirmasKintamasis + $antrasKintamasis + $treciasKintamasis)/3;
    $vidurkis = ceil($vidurkis);
    echo " Vidurkis $vidurkis";

    if($pirmasKintamasis < 10 || $pirmasKintamasis > 90){
        $vidurk1 = $pirmasKintamasis;
    }else{
        $vidurk1 = 0;
    }

    if($antrasKintamasis < 10 || $antrasKintamasis > 90){
        $vidurk2 = $antrasKintamasis;
    }else{
        $vidurk2 = 0;
    }

    if($treciasKintamasis < 10 || $treciasKintamasis > 90){
        $vidurk3 = $treciasKintamasis;
    }else{
        $vidurk3 = 0;
    }

    if( $vidurk1 > 0 && $vidurk2 > 0 && $vidurk3 > 0){
        $vidurkis2 = ceil(($vidurk1 + $vidurk2 + $vidurk3)/3);
        echo "$vidurkis2";
    }
    if( $vidurk1 > 0 && $vidurk2 > 0 && $vidurk3 === 0){
        $vidurkis2 = ceil(($vidurk2+ $vidurk1)/2);
        echo "$vidurkis2";
    }
    if($vidurk1 > 0 && $vidurk2 === 0 && $vidurk3 > 0){
        $vidurkis2 = ceil(($vidurk1 + $vidurk3)/2);
        echo "$vidurkis2";
    }
    if($vidurk1 === 0 && $vidurk2 > 0 && $vidurk3 > 0){
        $vidurkis2 = ceil(($vidurk2 + $vidurk3)/2);
    }



/* Padarykite skaitmenin?? laikrod??, rodant?? valandas, minutes ir sekundes.
 Valandom, minut??m ir sekund??m sugeneruoti panaudokite funkcij?? rand(). 
 Sugeneruokite skai??i?? nuo 0 iki 300. Tai papildomos sekund??s. 
 Skai??i?? prid??kite prie jau sugeneruoto laiko.
 Atspausdinkite laikrod?? prie?? ir po sekund??i?? prid??jimo ir pridedam?? sekund??i??
  skai??i??.*/
  echo "<br>";
  echo '****************10nmr **********************';
  echo "<br>";
  $valandos = rand(0,23);
  $minutes = rand(0,59);
  $sekundes = rand(0,59);
  $skaiciusTime = rand(0,300);
  echo "Actual Time Valandos: $valandos, minutes: $minutes, sekundes: $sekundes";
  echo "<br>";
  echo "Atsitiknis skaicius $skaiciusTime sek";
  $timeLiekana = floor($skaiciusTime/60);
  $minutes += $timeLiekana;
  $sekundes += ceil($skaiciusTime/60);
  echo "<br>";
  echo "Actual Time Valandos: $valandos, minutes: $minutes, sekundes: $sekundes";









