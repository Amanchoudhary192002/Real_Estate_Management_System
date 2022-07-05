<?php

@include 'admin/config.php';

session_start();
session_unset();
session_destroy();

header('location:http://localhost/repse/');//why i m past localhost because header tag can not redireted another folder 

?>


<!--header('location:login_form.php');