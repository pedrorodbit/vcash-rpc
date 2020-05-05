<?php
require '../vcashrpc.class.php';

$xvc = new vCashRPC;

/*
  The walletpassphrase RPC unlocks the wallet using the specified passphrase.
*/

$response = $xvc->walletPassphrase('PDW'); // Wallet Password

echo '<pre>';
var_dump($response);
echo '</pre>';
