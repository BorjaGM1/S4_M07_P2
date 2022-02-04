<?php
if(isset($_POST['n1']) && isset($_POST['n2'])){
    $n1 = (float)$_POST['n1'];
    $n2 = (float)$_POST['n2'];
    $op = $_POST['op'];
    switch ($op){
        case "suma";
            echo "El resultado de la suma es " .($n1 +$n2);
            break;
        case "resta";
            echo "El resultado de la resta es " .($n1 -$n2);
            break;
        case "multiplica";
            echo "El resultado de la multiplicacion es " .($n1*$n2);
            break;
        case "divide";
            echo "El resultado de la division es " .($n1/$n2);
            break;
    }
}
?>