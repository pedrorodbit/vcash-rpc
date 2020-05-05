<?php
require '../vcashrpc.class.php';

$xvc = new vCashRPC;

/*
  Returns the wallet balance.
*/

$response = $xvc->getBalance();

echo '<pre>';
var_dump($response);
echo '</pre>';
