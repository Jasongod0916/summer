<?php
echo "<h1>設定cookie囉!</h1>";
$value = '小可憐';
$value2 = 2;
header("Content-type: text/html; charset=utf-8");

setcookie("UserName",$value);
setcookie("UserAge",$value2,time() + 60 * 60 * 24 );

?>