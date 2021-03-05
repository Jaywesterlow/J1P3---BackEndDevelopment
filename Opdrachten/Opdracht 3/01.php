<html>
<head>
<style>
body{
    font-size: 30px;
    margin-left:1%;
    background-color: #2C3E50;
    color: #48C9B0;
}



</style>

<?php

$getal1 = 3;
$getal2 = 3;
$getal3 = $getal1 + $getal2;
$getal4 = $getal1 - $getal2;
$getal5 = $getal1 / $getal2;
$getal6 = $getal1 * $getal2;
$getal7 = $getal1 % $getal2;
$getal8 = ++$getal1;
$getal9 = --$getal1;


echo "$getal3 <br>";
echo "$getal4 <br>";
echo "$getal5 <br>";
echo "$getal6 <br>";
echo "$getal7 <br>";
echo "$getal8 <br>";
echo "$getal9 <br>";


if ($getal1 > $getal2){
    echo "getal 1 is groter dan getal 2";
}
elseif($getal1 < $getal2){
    echo "getal 1 is kleiner dan getal 2";
}
elseif($getal1 === $getal2){
    echo "getal 1 is gelijk aan getal 2";
}
else{
    echo "alle vergelijkingen zijn onjuist";
}

?>

</body>
</html>