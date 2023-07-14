<?php
$rating = $_GET['rating'];
$name = $_GET['name'];
$comment = $_GET['comment'];
//建立資料庫連接--------------------------------------------//
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test2";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)//檢查連接是否成功
{
    die("連接資料庫失敗：" . $conn->connect_error);
}
//----------------------------------------------------------//
$sql = "INSERT INTO `reviews_table` (`rating`,`name`, `comment`)
    VALUES ('$rating', '$name', '$comment')";
$conn->query($sql);
$conn->close();
// 重新載入
echo '<script>window.location.href = "留言板.php";</script>';
?>