<?php
session_start();

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 


$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'index.php';
header("Location: http://$host$uri/$extra");
exit;
// Redirect to the index

