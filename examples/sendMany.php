<?php
require '../vcashrpc.class.php';

$xvc = new vCashRPC;

/*
  Sends an amount of coins to a set of addresses.
*/

$params = [
  'VnNByVFpWs8uteRTyK6Pt7s3MBh77eoSM5' => 0.01,
  'VhfsZAm8wUBGYpjeHezno5LouykakRXrUN' => 0.01
];

$response = $xvc->sendMany('', $params); // Account, Parameters

echo '<pre>';
var_dump($response);
echo '</pre>';
