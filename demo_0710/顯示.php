<?php
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

$sql = "SELECT * FROM reviews_table";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    echo "<table align='center' border='1' style='table-layout: fixed; white-space: wrap; width:100%'>";
    echo "<tr><th>時間</th><th>分數</th><th>名子</th><th>評論</th></tr>";
    // 顯示每一筆資料
    while ($row = $result->fetch_assoc()) 
    {
        echo "<tr>";
        echo "<td>" . $row['review_date'] . "</td>";
        echo "<td style='text-align: center;'>" . $row['rating'];
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($row['rating'])) 
        {
            $rating = $row['rating'];
            for ($i = 1; $i <= $rating; $i++) 
            {
                echo '<span class="filled">&#9733;</span>';
            }
        }
        echo "</td>";
        echo "<td style='word-wrap: break-word;'>" . $row['name'] . "</td>";
        echo "<td style='word-wrap: break-word;'>" . $row['comment'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} 
else 
{
    echo "找不到相應的資料";
}
$conn->close();
?>