<?php
require '../vcashrpc.class.php';

$xvc = new vCashRPC;

/*
  Gets information regarding a transaction.
*/

$response = $xvc->getTransaction('fd737007e5ba3194fcb5bd8268c8f73edf4f28a855bb9b2615699e782c7a2a6c'); // txid

echo '<pre>';
var_dump($response);
echo '</pre>';
