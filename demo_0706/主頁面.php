<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>可憐</title>
</head>

<body>
    <h1>可憐暑假技術研習</h1>
    <a href="顯示.php">顯示</a>

    <form method="get" action="主頁面.php">
        <label>可憐人姓氏:</label></br>
        <input type="text" name="fname"></br>

        <label>可憐人名子:</label></br>
        <input type="text" name="name"></br>

        <label>可憐人的出生日期:</label></br>
        <input type="date" name="date"></br>

        <label>可憐人想說的話:</label></br>
        <textarea id="comment" name="comment" required></textarea></br>
        <input type="submit" value="送出">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['fname']) && isset($_GET['date']) && isset($_GET['comment'])) {
            $fname = $_GET['fname'];
            $name = $_GET['name'];
            $date = $_GET['date'];
            $comment = $_GET['comment'];

            //建立資料庫連接--------------------------------------------//
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "test";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) //檢查連接是否成功
            {
                die("連接資料庫失敗：" . $conn->connect_error);
            }
            //----------------------------------------------------------//
            $sql = "INSERT INTO people_table(people_fname, people_name, people_date, people_comment)
						VALUES ('$fname', '$name', '$date', '$comment')";
            if ($conn->query($sql) === TRUE) {
                echo "<p>註冊成功！</p>";
            } else {
                echo "錯誤：" . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
    }
    ?>



</body>

</html>