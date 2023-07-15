<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>購物</title>
</head>
<body>
    <h1>行動商城 歡迎購物</h1>
    <?php
    // 檢查是否登入,若否,即回登人,若有,繼續! 可點連登出。
    session_start();
    if (empty($_SESSION['log'])) 
    {
        echo "尚未登入";
        header("location: 登入.php");
        exit();
    }
    ?>
    <div>
        <h3>購物資訊 及表單</h3>
        <form name="purchase">
            <input type="checkbox" name="items" value="1">頻果</input><br />
            <input type="checkbox" name="items" value="2">鳳梨</input><br />
            <input type="checkbox" name="items" value="3">香蕉</input><br />
            <input type="checkbox" name="items" value="4">橘子</input><br />
        </form>
    </div>

    <a href="b02.php">登出</a>
</body>
</html>