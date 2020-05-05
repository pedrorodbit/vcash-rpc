<?php
require '../vcashrpc.class.php';

$xvc = new vCashRPC;

/*
  Returns information regarding the neighboring peers.
*/

$response = $xvc->getPeerInfo();

echo '<pre>';
var_dump($response);
echo '</pre>';
