<?php
session_start();
use PEAR2\Net\RouterOS;
require_once 'PEAR2/Autoload.php';
$client = new RouterOS\Client($_SESSION["ipaddress"], $_SESSION["username"], $_SESSION["password"]); 
$addRequest = new RouterOS\Request('/ip/address/add');
 
$addRequest->setArgument('address', $_POST["address"]);
$addRequest->setArgument('netmask', $_POST["netmask"]);
$addRequest->setArgument('interface', $_POST["interface"]);
if ($client->sendSync($addRequest)->getType() !== RouterOS\Response::TYPE_FINAL) {
    echo "<script>
            alert('Tidak bisa Menambahkan Ip Address / Ip Address Sudah ada');
            document.location.href = 'showipaddress.php';
        </script>";
}else{
    echo "<script>
        document.location.href = 'showipaddress.php';
        </script>";
}
?>