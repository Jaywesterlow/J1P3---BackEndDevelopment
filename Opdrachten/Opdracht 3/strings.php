<html>
<head>
    <title>Strings</title>
</head>
<body>
<?php

// Variabelen
    $eersteWeekdag = 'maandag';
    $tweedeWeekdag = 'dinsdag';
    $derdeWeekdag = "woensdag";
    $vierdeWeekdag = 'donderdag';
    $vijfdeWeekdag = 'vrijdag';
    $zesdeWeekdag = 'zaterdag';
    $zevendeWeekdag = 'zondag';

/*
 * OPDRACHT Strings, zie readme.md
 */

// Uitvoer
echo $eersteWeekdag."<br>";
echo $tweedeWeekdag."<br>";
echo $derdeWeekdag."<br>";
echo $vierdeWeekdag."<br>";
echo $vijfdeWeekdag."<br>";
echo $zesdeWeekdag."<br>";
echo $zevendeWeekdag."<br><br>";


/*
 * OPDRACHT String functions, zie readme.md
 */

// Vervang de temperatuur door de temperatuur van vandaag met behulp van str_replace.
$temperatuur = "De temperatuur is 23 graden";

echo str_replace(
    "23", 
    "6", 
    $temperatuur);

echo "<br><br>";


// Zet de $temperatuur string om in hoofdletters
echo strtoupper(
    $temperatuur);
// Toon de lengte van de $temperatuur string in je browser


?>

</body>
</html>