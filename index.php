<?php
/* Mostrar una tabla de html con las tablas de multiplicar del 1 al 10;
*/


echo "<table border='1'> <tr>";  // Inicio de la tabla

echo "<tr>";  // Inicio fila 1 de celdas

for ($cabecera = 1; $cabecera <= 10; $cabecera++) {

    echo "<td>Tabla del $cabecera</td>";
}





echo "</tr>";  // Cierre de celdas

echo "</table>";   // Fin de la tabla
