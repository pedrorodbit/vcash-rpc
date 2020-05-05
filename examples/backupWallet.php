<?php
require '../vcashrpc.class.php';

$xvc = new vCashRPC;

/*
  The backupwallet RPC safely copies your wallet.dat to the specified directory or path with a file name ending with .dat.
*/

$response = $xvc->backupWallet('C:\vCash_Backup\wallet.dat'); // Location

echo '<pre>';
var_dump($response);
echo '</pre>';
