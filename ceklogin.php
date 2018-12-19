<?php

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['customer']) || empty($_SESSION['passcust'])) {
    //redirect ke halaman login
    header('location:panelcustomer/index.php?error=5');
}
?>