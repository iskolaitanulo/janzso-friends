<?php
$ido = 6;
if ($ido >= 5 and $ido < 10) {
    print('Jó reggelt.');
}
else if ($ido >= 10 and $ido < 12){
    print('Napos délelőtött.');
}
else if ($ido >= 12 and $ido < 13){
    print('Jó étvágyat.');
}
else if ($ido >= 13 and $ido < 18){
    print('Szép napot.');
}
else{
    print('Jó estét.');
}

?>