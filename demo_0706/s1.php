<?php

echo '<h1>session建立</h1>';
session_start();
$_SESSION['user'] = $_GET['username'];
$_SESSION['acc'] = $_GET['password'];
?>