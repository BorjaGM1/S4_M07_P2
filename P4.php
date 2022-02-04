<form action="P4.php" method="post">
    <label for="nota">Nota:</label>
    <input type="number" id="nota" step ="0.01" name="nota"><br>
    <p><input type="submit" /></p>
</form>
<?php
if (isset($_POST['nota'])){
    $c=0;
    $s=5;
    $a=7;
    $n=9;
    $h=10;
    $nota = (float)$_POST['nota'];
    if ($nota<$s && $nota>=$c){$response="Suspenso";echo $response;}
    if ($nota<$a && $nota>=$s){$response="Aprobado";echo $response;}
    if ($nota<$n && $nota>=$a){$response="Notable";echo $response;}
    if ($nota<$h && $nota>=$n){$response="Excelente";echo $response;}
    if ($nota==$h){$response="Matricula de honor";echo $response;}
}
?>