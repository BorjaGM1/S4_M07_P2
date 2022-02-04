<form action="P3.php" method="post">
    <label for="times">¿Cuántas veces?</label>
    <input type="number" id="times" name="times"><br>
    <p><input type="submit" /></p>
</form>
<?php
if (isset($_POST['times'])){
    $times = (int)$_POST["times"];
    $response = "";
    for ($i=1;$i<=$times;$i++){
        $response .= "¡Los bucles son fáciles! <br>";
    }
    echo $response;
}
?>