<?php
require '../vcashrpc.class.php';

$xvc = new vCashRPC;

/*
  The dumpprivkey RPC returns the private key of the specified address in wallet-import-format (WIF). The address and private key are not removed from the wallet.
*/

$response = $xvc->dumpPrivKey('VnNByVFpWs8uteRTyK6Pt7s3MBh77eoSM5'); // vCash Address

echo '<pre>';
var_dump($response);
echo '</pre>';
