<?php
    echo <<<EOT
    <meta charset="utf-8">
    <form action="bmi.php" method="post">
    <label>neme</label>
    <input type="text" name="neme">
    <br>
    <label>Testsúly(kg)<label>
    <input type="number" name="testsuly">
    <br>
    <label>Testmagassága(cm)<label>
    <input type="number" name="testmagassag">
    <br>
    <button type="submit">Kalkulál</button>
    EOT;
?>