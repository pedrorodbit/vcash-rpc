<?php
require '../vcashrpc.class.php';

$xvc = new vCashRPC;

/*
  Validates an address.
*/

$response = $xvc->validateAddress('VnNByVFpWs8uteRTyK6Pt7s3MBh77eoSM5');

echo '<pre>';
var_dump($response);
echo '</pre>';
