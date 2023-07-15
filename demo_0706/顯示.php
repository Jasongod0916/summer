<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>顯示</title>
</head>
<body>
<?php
	session_start();
	//建立資料庫連接--------------------------------------------//
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error)//檢查連接是否成功
	{
		die("連接資料庫失敗：" . $conn->connect_error);
	}
	//----------------------------------------------------------//
    $sql = "SELECT *FROM people_table";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        echo "<table border>";

        echo "<tr>";
        echo "<th>姓氏</th>";
        echo "<th>名子</th>";
        echo "<th>出生日期</th>";
        echo "<th>留言</th>";
        echo "</tr>";
        while ($row = $result->fetch_assoc()) 
        {
            $people_fname = $row['people_fname'];
            $people_name = $row['people_name'];
            $people_date = $row['people_date'];
            $pepeople_comment = $row['people_comment'];

            echo "<tr>";
            echo "<td>".$row['people_id']."</td>";
            echo "<td>$people_fname</td>";
            echo "<td>$people_name</td>";
            echo "<td>$people_date</td>";
            echo "<td>$pepeople_comment</td>";
            echo "</tr>";
        }
        echo "</table>";
    } 
    echo '<a href="主頁面.php">返回</a>';
	$conn->close();
    ?>
</body>
</html>