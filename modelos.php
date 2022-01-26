<?php

require "client.php";

$marca = $_GET['marca'];

$auto = $client->ObtenerModelosPorMarca($marca);

foreach ($auto as $modelo) {
    print "<img src=\"assets/images/$marca.png\" height=\"50px\" width=\"60px\"/><h2>$modelo</h2>";
}
