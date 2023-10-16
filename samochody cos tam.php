<?php
$ccc=$_GET['fff'];
 
 
$con = new mysqli("127.0.0.1","root","","firma");
 
$q="DELETE FROM pracownicy WHERE `pracownicy`.`id` ='".$ccc."'" ;
//$con->query($q);
mysqli_query($con, $q);
//if($wynik=$con->query($q))
//while($row=$wynik->fetch_array())
//echo $row["lp"] . ";" . $row["nazwa"] . ";" . $row["cena"] . "<br/>";
//else
//echo $con->errno . " " . $con->error;
 
?>