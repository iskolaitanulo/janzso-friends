<?php
     echo <<<EOT
     <meta charset="utf-8">
     <form action="bmi.php" method="post">
     <table border=2px align=center height=150px width=400px>
     <tr><td>
     <p align=center>
     <h1 align=center>Testtömegindex<br>(BMI)</h1>
     </p>
     <p>
     <label>Neme: </label>
     <input type="text" name="neme">
     </p>
     <p>
     <label>Testsúlya (kg): </label>
     <input type="text" name="suly">
     </p>
     <p>
     <label>Testmagassága (cm): </label>
     <input type="text" name="magas">
     <br>
     <p align=center>
     <button type="submit">Kalkulál</button>
     </p>
     <br>
     </td></tr>
     </table>
     EOT;
?>