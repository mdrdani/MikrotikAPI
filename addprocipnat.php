<?php
session_start();
use PEAR2\Net\RouterOS;
require_once 'PEAR2/Autoload.php';
$client = new RouterOS\Client($_SESSION["ipaddress"], $_SESSION["username"], $_SESSION["password"]); 
$addRequest = new RouterOS\Request('/ip/firewall/nat/add');
 
$addRequest->setArgument('out-interface', $_POST["out-interface"]);
$addRequest->setArgument('chain', $_POST["chain"]);
$addRequest->setArgument('action', $_POST["action"]);
if ($client->sendSync($addRequest)->getType() !== RouterOS\Response::TYPE_FINAL) {
    echo "<script>
            alert('Tidak bisa Menambahkan Ip NAT / Ip NAT sudah ada');
            document.location.href = 'showipnat.php';
        </script>";
}else{
    echo "<script>
        document.location.href = 'showipnat.php';
        </script>";
}
?>