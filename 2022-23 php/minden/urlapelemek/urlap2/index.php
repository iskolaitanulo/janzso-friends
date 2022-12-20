<?php
    echo <<<EOT
    <meta charset="utf-8">
    <form action="belep.php" method="post">
    <label>Felhasználo neve</label>
    <input type="text" name="felhasz">
    <br>
    <label>Jelszo<label>
    <input type="password" name="belepes">
    <br>
    <button type="submit">Belepes</button>
    EOT;
?>