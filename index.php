<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hybrydowy smiec</title>
    <!-- <link rel="stylesheet" href="css.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kenia&display=swap" rel="stylesheet">
</head>
<body>
    <h1>jd</h1>
    <?php
    $pon="3";
    $hwdp='l%';
   
    Echo "<html>";
// Echo "<div>";
$con = mysqli_connect('127.0.0.1','root','',"wedkowanie");
$q1="SELECT * FROM ryby where id>$pon && nazwa like '" . $hwdp . "';";
if($wynik=$con->query($q1))
while($row=$wynik->fetch_array())
echo $row["id"] . "-" . $row["nazwa"] . "-" . $row["wystepowanie"]  . "-" . $row["styl_zycia"] . "" . "<br/>";
else
echo $con->errno . " " . $con->error;
   
// Echo "</div>";
    ?>
</body>
</html>