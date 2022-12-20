<?php
$felhasz=$_POST['felhasz'];
$belepes=$_POST['belepes'];
if ($_POST['felhasz']=='admin') {
    if($_POST['belepes']=='admin'){
        echo('Sikeres belepes');
    }
    else{
        echo('Nem jo jelszo');}
}
else{
    echo('nincs ilyen felhasznalo nev');}


?>
