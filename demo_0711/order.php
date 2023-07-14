<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);
require_once 'db.php';

$book_no = $_POST["book_no"];
$book_name = $_POST["book_name"];
$quantity = $_POST["quantity"];
$subTotal = $_POST["price"];
$total = $_POST["total_price"];

$sql = "INSERT INTO `order` (book_no, book_name, quantity, subTotal, total_price)
        VALUES ('$book_no', '$book_name', '$quantity', '$subTotal', '$total')";

$result = mysqli_query($link, $sql);
mysqli_close($link);

header("location: show_order.php");
exit();
?>
