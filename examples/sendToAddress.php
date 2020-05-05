<?php
require '../vcashrpc.class.php';

$xvc = new vCashRPC;

/*
  Sends an amount of coins to an address.
*/

$response = $xvc->sendToAddress('VnNByVFpWs8uteRTyK6Pt7s3MBh77eoSM5', 0.1); // vCash Address, Amount

echo '<pre>';
var_dump($response);
echo '</pre>';
