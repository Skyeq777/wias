<?php
session_start();
$Dieta = $_GET['Dieta'];
$RodzajTreningu = $_GET['RodzajTreningu'];
$IloscTreningow = $_GET['IloscTreningow'];
$_SESSION["DietaCookie"] = "$Dieta";
$_SESSION["RodzajTreninguCookie"] = "$RodzajTreningu";
$_SESSION["IloscTreningowCookie"] = "$IloscTreningow";



$con = new mysqli("127.0.0.1","root","","trening");
$q1="INSERT INTO `dieta` (`Imie`, `Nazwisko`, `Plec`, `Dieta`, `Rodzaj_treningu`, `Ilosc_Treningow`) VALUES ('".$_SESSION['ImieCookie']."', '".$_SESSION['NazwiskoCookie']."', '".$_SESSION['PlecCookie']."', '".$_SESSION['DietaCookie']."','".$_SESSION['RodzajTreninguCookie']."','".$_SESSION['IloscTreningowCookie']."')";
if ($con->query($q1) === TRUE) {
   echo "rekord wpisany";
} else {
   echo "Error: " . $q1 . "<br>" . $con->error;
}



$q="SELECT * FROM dieta";
if($wynik=$con->query($q))
while($row=$wynik->fetch_array())
echo $row["nr"] . ";" . $row["Imie"] . ";" . $row["Nazwisko"] . ";" . $row["Plec"] . ";" . $row["Dieta"] . ";" . $row["Rodzaj_treningu"] . ";" . $row["IloscTreningow"] . "<br/>";
else
echo $con->errno . " " . $con->error;



?>


