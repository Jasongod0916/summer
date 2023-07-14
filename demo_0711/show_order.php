<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'db.php';

    // 建立資料連接
    $sql = "SELECT * FROM `order`";
    $result = mysqli_query($link, $sql);

    // 顯示記錄
    echo "<table border='0' width='800' align='center'>";
    echo "<tr bgcolor='lightblue'>";
    echo "<td>訂單編號:</td>";
    echo "<td>書編號:</td>";
    echo "<td>書名:</td>";
    echo "<td>數量:</td>";
    echo "<td>小計:</td>";
    echo "<td>總計:</td>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        $book_no_array = explode(", ", $row["book_no"]);
        $book_name_array = explode(", ", $row["book_name"]);
        $quantity_array = explode(", ", $row["quantity"]);
        $subTotal_array = explode(", ", $row["subTotal"]);

        for ($i = 0; $i < count($book_no_array); $i++) {
            echo "<tr bgcolor='#b0c4de'>";
            echo "<td align='center'>" . $row["order_no"] . "</td>";
            echo "<td align='center'>" . $book_no_array[$i] . "</td>";
            echo "<td align='center'>" . $book_name_array[$i] . "</td>";
            echo "<td align='center'>" . $quantity_array[$i] . "</td>";
            echo "<td align='center'>$" . $subTotal_array[$i] . "</td>";
            echo "<td align='center'>$" . $row["total_price"] . "</td>";
            echo "</tr>";
        }
    }

    echo "</table>";

    // 釋放記憶體空間
    mysqli_free_result($result);
    mysqli_close($link);
    ?>

</body>

</html>