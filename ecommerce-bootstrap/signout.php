<?php
// session_start();
session_abort();
echo session_status();
header('location:index.php');
?>