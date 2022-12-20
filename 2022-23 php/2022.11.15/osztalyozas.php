<?php
$pontszam=$_POST['pontszam'];
print($pontszam);
echo'</br>';
if ($pontszam <= 50 ) {
    $ponthatar=51-$pontszam;   
    print('ennyi pont kellet volna jobb jegyhez:' .$ponthatar.'pont');
    echo'</br>';
    print ('1es');
    if ($ponthatar == 1){
        echo'</br>';
        print('Jobb jegy megajánhato');
    }
    if ($pontszam == 0){
        echo'</br>';
        print('pont hatar aljat erte el');
    }

}
elseif ($pontszam <= 60) {
    $ponthatar=61-$pontszam;   
    print('ennyi pont kellet volna jobb jegyhez:' .$ponthatar.'pont');
    echo'</br>';
    print ('2es');
    if ($ponthatar == 1){
        echo'</br>';
        print('Jobb jegy megajánhato');
    }
    if ($pontszam == 51){
        echo'</br>';
        print('pont hatar aljat erte el');
    }
}
elseif ($pontszam <= 70) {
    $ponthatar=71-$pontszam;   
    print('ennyi pont kellet volna jobb jegyhez:' .$ponthatar.'pont');
    echo'</br>';
    print ('3mas');
    if ($ponthatar == 1){
        echo'</br>';
        print('Jobb jegy megajánhato');
    }
    if ($pontszam == 61){
        echo'</br>';
        print('pont hatar aljat erte el');
    }
}
elseif ($pontszam <= 80) {
    $ponthatar=81-$pontszam;   
    print('ennyi pont kellet volna jobb jegyhez:' .$ponthatar.'pont');
    echo'</br>';
    print ('4es');
    if ($ponthatar == 1){
        echo'</br>';
        print('Jobb jegy megajánhato');
    }
    if ($pontszam == 71){
        echo'</br>';
        print('pont hatar aljat erte el');
    }
}
elseif ($pontszam <= 100) {
    print ('5ös');
    if ($pontszam == 81){
        echo'</br>';
        print('pont hatar aljat erte el');
    }
}


?>