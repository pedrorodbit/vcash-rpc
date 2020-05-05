<?php
require '../vcashrpc.class.php';

$xvc = new vCashRPC;

/*
  The dumpwalletseed RPC returns the deterministic wallet seed.
*/

$response = $xvc->dumpWalletSeed();

echo '<pre>';
var_dump($response);
echo '</pre>';
