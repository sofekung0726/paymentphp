<?php

session_start();    

$bank = $_POST['bank'];
$atm = $_POST['atm'];
$bankname = $_POST['bankname'];
$lastname = $_POST['lastname'];
$balance = $_POST['balance'];


    $_SESSION['bank'] = $bank; 
    $_SESSION['atm'] = $atm;
    $_SESSION['bankname'] = $bankname;
    $_SESSION['lastname'] = $lastname;
        $_SESSION['balance'] = $balance;

    header('location: payment.php');

?>
