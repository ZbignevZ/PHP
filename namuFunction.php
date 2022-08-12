<?php


function moja($liczba){
    $licznik = 0;
    for($i=2;$i < $liczba; $i++){
        if($i != $liczba){

        if($liczba % $i === 0){
            $licznik++;
        }

        } 
    }echo "$licznik";




}

 echo moja(9);

 