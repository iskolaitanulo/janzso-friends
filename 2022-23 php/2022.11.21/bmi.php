<?php
$testsuly = $_POST['testsuly'];
$neme = $_POST['neme'];
print('testsúlllya:'.$testsuly.'kg');
$testmagassag = $_POST['testmagassag'];
$eredmeny = $testsuly / ($testmagassag/100)**2;
echo '</br>';
print('magassága:'.$testmagassag.'cm');
echo '</br>';
print('neme:'.$neme);
echo '</br>';
print('bmi:'.$eredmeny);
echo '</br>';
if ($neme == 'fiu' or $neme == 'chad' ){
    print('Kedves Uram');
    echo '</br>';
    if($eredmeny >= 18.6 and $eredmeny <= 25){
        print('alkata normál');
}
    elseif($eredmeny >= 24.1 and $eredmeny <= 29.9){
        print('alkata túlsúlyos');
    }
    elseif($eredmeny >= 30 ){
        print('alkata elhízott');
    }

}
else{
    print('Kedves Hölgyem');
    echo '</br>';
    if($eredmeny >= 18.6 and $eredmeny <= 24){
        print('alkata normál');
}
    elseif($eredmeny >= 24.1 and $eredmeny <= 28.9){
        print('alkata túlsúlyos');
    }
    elseif($eredmeny >= 29 ){
        print('alkata elhízott');
    }

}
echo '</br>';

if ($eredmeny <= 18.5){
    print('alkata sovány');
}
?>




