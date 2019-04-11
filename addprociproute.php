<?php
session_start();
use PEAR2\Net\RouterOS;
require_once 'PEAR2/Autoload.php';
$client = new RouterOS\Client($_SESSION["ipaddress"], $_SESSION["username"], $_SESSION["password"]); 
$addRequest = new RouterOS\Request('/ip/route/add');
 
$addRequest->setArgument('address', $_POST["address"]);
$addRequest->setArgument('dst-address', $_POST["dst-address"]);
$addRequest->setArgument('gateway', $_POST["gateway"]);
$addRequest->setArgument('distance', $_POST["distance"]);
$addRequest->setArgument('check-gateway', $_POST["check-gateway"]);
if ($client->sendSync($addRequest)->getType() !== RouterOS\Response::TYPE_FINAL) {
    echo "<script>
            alert('Tidak bisa Menambahkan Ip Route');
            document.location.href = 'showiproute.php';
        </script>";
}else{
    echo "<script>
        document.location.href = 'showiproute.php';
        </script>";
}
?>