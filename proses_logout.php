<?php
    // mengaktifkan session
    session_start();

    // menghapus session
    session_destroy();

    // arahkan ke login.php
    
    header('location:login.php');
    exit();
?>


