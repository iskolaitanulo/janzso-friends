<?php
$a = 3;
$b = 8;
$c = 2;
$D = (sqrt($b**2-(4*$a*$c)));
if ($a != 0) {
print ($a. "x^2 + ". $b. " x + ". $c . " = 0");
print "<p/>";
$D = (sqrt($b**2-(4*$a*$c)));
print ("D = ". round($D,4));
print "<p/>";
print ("x1 = ". (-$b+$D)/(2*$a));
print "<p/>";
print ("x2 = ". (-$b-$D)/(2*$a));
}
elseif ($D < 0) {
    print("A gyök alatti szám nulla.");
}
else {
    print("Az a értéke nulla.");
}
?>