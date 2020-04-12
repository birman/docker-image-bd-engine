<?php
echo '<h1>Hola Mundo</h1>';
$connection = mysqli_connect("mysqldb", "root", "tu_password", "tu_bd");
 
if (!$connection) {
    echo "Error conectando a la base de datos";
    exit;
}
 
echo "Conectando a la base de datos correctamente.";
?>