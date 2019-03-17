<?php
        session_start();
        $_SESSION['cnt']++;
        print 'Number of  visited persons are '.$_SESSION['cnt'];
?>