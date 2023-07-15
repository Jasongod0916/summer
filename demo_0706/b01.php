<?php
session_start();
if(isset($_SESSION['log']))
{
    echo "isset!";
    header("location: b03.php");
    exit();
}
$uname = $_GET['username'];
$pwd = $_GET['password'];
if( $uname != "root" )
{
    header("location: 登入.php");
    exit();
}
if( $pwd != "123" )
{
    header("location: 登入.php");
    exit();
}
$_SESSION['log'] = 'ok';
echo "ok";
header("location: b03.php");
exit();
?>