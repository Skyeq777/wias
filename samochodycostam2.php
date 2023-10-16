<?php
if (isset($_POST['submit'])) {
    $con = new mysqli('127.0.0.1', 'root', '', 'sklep');
 
 
    if (isset($_POST['fff'])) {
        $fffusun = implode(",", $_POST['fff']);  
        $deleteQuery = "DELETE FROM samochody WHERE id IN ($fffusun)";
 
        $con->query($deleteQuery) == TRUE;
    }
}
?>
 
<form method="post">
<?php
$con = new mysqli('127.0.0.1', 'root', '', 'sklep');
$q = "SELECT id, marka, rocznik, kolor, stan FROM samochody";
 
if ($wynik = $con->query($q)) {
    while ($row = $wynik->fetch_array()) {
        echo "<input type='radio' name='fff[]' value='" . $row["id"] . "'>" . $row["id"] . ";" . $row["marka"] . ";" . $row["rocznik"] . ";" . $row["kolor"] . ";" . $row["stan"] . "<br/>";
    }
} 
 
?>
<input type="submit" name="submit" value="Submit">
</form>