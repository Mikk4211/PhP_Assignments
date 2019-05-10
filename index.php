
<form action="index.php" method="GET">
     
     Æbler: <input type="apples" name="apples">
     Vand: <input type="water" name="water">
     Sukker: <input type="sugar" name="sugar">
     People: <input type="people" name="people">
    
     <input type="submit">
     </form>


<?php
    /*
    $num1 = $_GET["num1"];
     $num2 = $_GET["num2"];
     $navn = $_GET["navn"];
     */
     $Æbler = $_GET["apples"];
     $Vand = $_GET["water"];
     $Sukker = $_GET["sugar"];
     $People = $_GET["people"];

     
     $æbleres = $Æbler * $People;
     $vandres = $Vand * $People;
     $sukkerres = $Sukker * $People;

     /*echo "Result: " . $resultat;
     echo "<br/> Navn: " . $navn;
    */

     echo "<br/> Til at lave æblegrød, skal man bruge: <br/> " .$Æbler . " æbler, " . $Vand . " liter vand og " . $Sukker . " gram sukker";
     echo "<br/>Når du skal lave æblegrød til " . $People . " skal du bruge: <br/> " . $æbleres." æbler, <br/> " . $vandres . " liter vand og <br/> " . $sukkerres . " gram sukker. ";


    /* Kommentarsektion 
     Num1: <input type="number" name="num1">
     Num2: <input type="number" name="num2">
     Navn: <input type="name"   name="navn">
    /*$resultat = $num1 + $num2;*/
     */

?>


