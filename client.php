<?php

$params = array(
    'location' => 'https://soap-automoviles.herokuapp.com/service-automoviles-auth.php',
    'uri' => 'https://soap-automoviles.herokuapp.com/',
    'trace' => 1
);

$client = new SoapClient(null, $params);

$client->__setCookie('__test', '2decda030c7efc2081454a3c0a64b026');

/*
$marcas = $client->ObtenerMarcasUrl();

foreach ($marcas as $coche) {
    print "<pre>$coche</pre>";
}
*/
/* 
print "<li>Ford";
$marca = "ford";

$auto = $client->ObtenerModelosPorMarca($marca);

print "<ul>";
foreach ($auto as $coche) {
    print "<li>$coche</li>";
}
print "</ul>";
print "</li>";

print "<li>Seat";
$marca = "seat";

$auto = $client->ObtenerModelosPorMarca($marca);

print "<ul>";
foreach ($auto as $coche) {
    print "<li>$coche</li>";
}
print "</ul>";
print "</li>";

print "<li>Nissan";
$marca = "nissan";

$auto = $client->ObtenerModelosPorMarca($marca);

print "<ul>";
foreach ($auto as $coche) {
    print "<li>$coche</li>";
}
print "</ul>";
print "</li>";

print "<li>Audi";
$marca = "audi";

$auto = $client->ObtenerModelosPorMarca($marca);

print "<ul>";
foreach ($auto as $coche) {
    print "<li>$coche</li>";
}
print "</ul>";
print "</li>";

print "<li>BMW";
$marca = "bmw";

$auto = $client->ObtenerModelosPorMarca($marca);

print "<ul>";
foreach ($auto as $coche) {
    print "<li>$coche</li>";
}
print "</ul>";
print "</li>";

print "<li>Citroen";
$marca = "citroen";

$auto = $client->ObtenerModelosPorMarca($marca);

print "<ul>";
foreach ($auto as $coche) {
    print "<li>$coche</li>";
}
print "</ul>";
print "</li>";
*/