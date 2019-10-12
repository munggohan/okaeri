<?php
session_start();
session_destroy();
// session_abort();
echo session_status();
header('location:index.php');
?>