<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="3cookie.php" method="get">
Dieta: <br>
<select name="Dieta">
    <option value="niskobialkowa">niskobialkowa </option>
    <option value="bezglutenowa">bezglutenowa </option>
    <option value="przecierana"> lekkostrawna z modyfikacjami konsystencji:  dieta przecierana. </option>
</select>
<br>
Jaki trening:
<br>
<select name="RodzajTreningu">
    <option value="silowy">silowy (oporowy) </option>
    <option value="wytrzymalosciowy">wytrzymalosciowy (kondycyjny) </option>
    <option value="funkcjonalny"> funkcjonalny </option>
</select>
<br>
Ilosc treningow:<br>
<input type="number" name="IloscTreningow">




<input type="submit" name=przeslij>


</body>
</html>

<?php
session_start();
$Imie = $_GET['Imie'];
$Nazwisko = $_GET['Nazwisko'];
$Plec = $_GET['Plec'];
$_SESSION["ImieCookie"] = "$Imie";
$_SESSION["NazwiskoCookie"] = "$Nazwisko";
$_SESSION["PlecCookie"] = "$Plec";
?>