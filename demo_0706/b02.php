<?php
session_start();
unset($_SESSION['log']);
session_unset();
session_destroy();
header("location: 登入.php");
exit();
?>