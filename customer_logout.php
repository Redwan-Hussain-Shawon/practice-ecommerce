<?php
include 'include/header_include.php';

set_logged_user_login_status(false);
unset($_SESSION['logged']);

$_SESSION['success_message']='Successfuly logout';
redirect('customer_login.php');
?>