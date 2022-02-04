<form action="P5.php" method="post">
    <label for="dni">DNI</label>
    <input type="number" id="dni" name="dni"><br>
    <p><input type="submit" /></p>
</form>
<?php
$letra = array(0 => "T",
    1 => "R",
    2 => "W",
    3 => "A",
    4 => "G",
    5 => "M",
    6 => "Y",
    7 => "F",
    8 => "P",
    9 => "D",
    10 => "X",
    11 => "B",
    12 => "N",
    13 => "J",
    14 => "Z",
    15 => "S",
    16 => "Q",
    17 => "V",
    18 => "H",
    19 => "L",
    20 => "C",
    21 => "K",
    22 => "E");
if (isset($_POST['dni'])) {
    $dni = (int)$_POST["dni"];
    $resto = $dni%23;
    $response = $letra[$resto];
    echo $response;
}
?>