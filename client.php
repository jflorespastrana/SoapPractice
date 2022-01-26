<?php

$params = array(
    'location' => 'https://soap-automoviles.herokuapp.com/service-automoviles-auth.php',
    'uri' => 'https://soap-automoviles.herokuapp.com/',
    'trace' => 1
);

$client = new SoapClient(null, $params);

$client->__setCookie('__test', '2decda030c7efc2081454a3c0a64b026');
