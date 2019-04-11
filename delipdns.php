<?php
session_start();
use PEAR2\Net\RouterOS;
require_once 'PEAR2/Autoload.php';
$client = new RouterOS\Client($_SESSION["ipaddress"], $_SESSION["username"], $_SESSION["password"]);
$addRequest = new RouterOS\Request('/ip/dns/set');
 
$addRequest->setArgument('servers', '0.0.0.0');
$addRequest->setArgument('allow-remote-requests', $_POST["allow-remote-requests"]);
if ($client->sendSync($addRequest)->getType() !== RouterOS\Response::TYPE_FINAL) {
    echo "<script>
            alert('Tidak bisa Menambahkan DNS');
            document.location.href = 'showipdns.php';
        </script>";
}else{
    echo "<script>
        document.location.href = 'showipdns.php';
        </script>";
}
?>