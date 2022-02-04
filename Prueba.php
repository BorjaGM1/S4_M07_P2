<form action="Prueba.php" method="post">
    <p>Su nombre: <input type="text" name="nombre" /></p>
    <p>Su edad: <input type="text" name="edad" /></p>
    <p><input type="submit" /></p>
</form>
<?php
if (isset($_POST['nombre']) && isset($_POST['edad'])){
    echo "Hola " .htmlspecialchars($_POST['nombre']);
    echo ", Usted tiene ".(int)$_POST['edad']." años";
}
?>