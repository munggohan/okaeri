<?php
// session_start();
session_destroy();
echo session_status();
header('location:index.php');
?>