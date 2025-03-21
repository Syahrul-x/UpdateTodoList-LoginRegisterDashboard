<?php
session_start();
session_destroy();
header("Location: login.php"); // Kembali ke login setelah logout
exit();
?>
