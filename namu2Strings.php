<?php


/* Sukurti du kintamuosius. 
Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). 
Atspausdinti trumpesnį stringą */

echo '--------Nr1-------';
echo "<br>";

$actorName = 'Johny';
$actorSurname = 'Bean';
echo $actorName .' '.$actorSurname;
echo "<br>";
echo "<br>";


/* Sukurti du kintamuosius.
 Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
 Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
 */

echo '--------Nr2-------';
echo "<br>";
echo strtoupper($actorName). ' '. strtolower($actorSurname);
echo "<br>";
echo "<br>";


/*Sukurti du kintamuosius. 
Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. 
Jį atspausdinti.
*/

echo '--------Nr3-------';
echo "<br>";
$actor3 = $actorName[0]. ' ' .$actorSurname[0];
echo $actor3;
echo "<br>";
echo "<br>";

/* Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
 Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių.
  Jį atspausdinti.
  */

echo '--------Nr4-------';
echo "<br>";
$actor4 = substr($actorName, -3) .' '. substr($actorSurname, -3);
echo $actor4;
echo "<br>";
echo "<br>";


/* Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”. 
 Rezultatą atspausdinti.
 */

echo '--------Nr5-------';
echo "<br>";
$americanInParis = 'An American in Paris';
$five = strtr($americanInParis, 'aA ', '**');
echo $five;
echo "<br>";
echo "<br>";

/*Sukurti kintamąjį su stringu: “An American in Paris”.
 Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. 
 Rezultatą atspausdinti.
 */

echo '--------Nr6-------';
echo "<br>";
$aCounter = 0;
$americanAray = explode(" ",$americanInParis);
foreach($americanAray as $value){
    if($value = 'a'|| $value = 'A'){
        $aCounter++;
    }
}
echo $aCounter;
echo "<br>";
echo "<br>";

/*Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame ištrinti visas balses. Rezultatą atspausdinti. 
Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
*/

echo '--------Nr7-------';
echo "<br>";
echo  preg_replace('#[aeiouy\s]+#i', '', $americanInParis);
echo "<br>";
$breakfast = "Breakfast at Tiffany's";
echo $breakfast. " ". preg_replace('#[aeiouy\s]+#i', '', $breakfast);
echo "<br>";
$spaceOdyssey = '2001: A Space Odyssey';
$wonderful = "It's a Wonderful Life";
echo $spaceOdyssey. "  " .preg_replace('#[aeiouy\s]+#i', '', $spaceOdyssey);
echo "<br>";
echo $wonderful." ". preg_replace('#[aeiouy\s]+#i', '', $wonderful);
echo "<br>";
echo "<br>";


/* Stringe, kurį generuoja toks kodas: 
'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
 Surasti ir atspausdinti epizodo numerį.
 */


echo '--------Nr8-------';
echo "<br>";
$starWars = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo "$starWars ";
echo "<br>";
echo preg_replace('/[^1-9]/', '', $starWars);
echo "<br>";
echo "<br>";


/*Suskaičiuoti kiek stringe “Don't Be a Menace to South
 Central While Drinking Your Juice in the Hood” 
 yra žodžių trumpesnių arba lygių nei 5 raidės. 
 Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, 
 geriant sultis pas save kvartale”.
*/

echo '--------Nr9-------';
echo "<br>";

$southCentral = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$southAray = explode(' ',$southCentral);
$southcounter = 0;
foreach($southAray as $text){
    if(strlen($text)  <= 5 ){
        $southcounter++;
        echo $text."   ";
    }
}
echo $southcounter;
echo "<br>";
$centerCount = 0;
$pietuCentras = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$pietuAray = explode(' ', $pietuCentras);
foreach($pietuAray as $text){
    if(strlen($text) <= 5 ){
        $centerCount++;
        echo $text."   ";
    }
}
echo $centerCount;
echo "<br>";
echo "<br>";

// Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai. 

echo '--------Nr10-------';
echo "<br>";
$n=3;
function getName($n) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomString = '';
  
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
  
    return $randomString;
}
  
echo getName($n);




















