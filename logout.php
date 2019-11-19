<?php
session_start();
session_destroy();
header('location:index.php');
echo 'You are logged out successfully';
?>