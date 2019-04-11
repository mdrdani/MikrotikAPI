<?php
session_start();
use PEAR2\Net\RouterOS;
require_once 'PEAR2/Autoload.php';
$ipad = $_POST["ip"];
$username = $_POST["username"];
$password = $_POST["password"];

$client = new RouterOS\Client($ipad, $username, $password);
if($client == true){
    $_SESSION["ipaddress"] = $ipad;
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    header("Location:index.php");
}else if($client == false){ 
    echo "
    <script>
        document.location.href = 'login.php';
    </script>
    ";
}

?>