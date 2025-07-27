<?php
function simularDonacion($nombre, $monto) {
    return "Gracias $nombre por tu donación de $$monto. ¡Tu apoyo es valioso!";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $monto = floatval($_POST['monto']);
    echo simularDonacion($nombre, $monto);
}
?>
