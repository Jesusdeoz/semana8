<?php
include 'Evento.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descripcion = htmlspecialchars($_POST['descripcion']);
    $tipo = htmlspecialchars($_POST['tipo']);
    $lugar = htmlspecialchars($_POST['lugar']);
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    $evento = new Evento($descripcion, $tipo, $lugar, $fecha, $hora);
    echo "<h2>Evento Registrado</h2>";
    echo $evento->mostrarEvento();
}
?>
