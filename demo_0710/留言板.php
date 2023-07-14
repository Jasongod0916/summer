<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>留言板</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: row;
        }
        .filled {
            color: gold;
        }
        input[type="range"],
        input[type="text"],
        textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        table {
            width: 80%;
            margin: 0 auto;
            background-color: #ffffff;
            border-collapse: collapse;
            border: 1px solid #cccccc;
        }
        th {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: left;
        }
        td {
            padding: 10px;
            vertical-align: top;
        }
        
        .content 
		{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="content" style="margin-bottom:20px; width:40rem;">
    <h2>您的意見，我們很重視!</h2>
        <form action="新增.php" method="get">
            <table align="center" border="1">
                <tr>
                    <td><label for="rating">評價分數</label></td>
                    <td style="border:0px solid; padding:30px; display: flex; flex-direction:column">
                        <input type="range" id="rating" name="rating" min="1" max="5" required
                            oninput="showRating(this.value)">
                        <div id="ratingStars"></div>
                    </td>
                <tr>
                    <td><label for="name">名子</label></td>
                    <td style="width:80%; padding:20px;"><input type="text" id="name" name="name" required></td>
                </tr>
                <tr>
                    <td><label for="comment">評論</label></td>
                    <td style="width:80%; padding:20px;"><textarea id="comment" name="comment" required></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="提交評價">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    include("顯示.php");
    ?>
    <script>
        var stars = '';
        for (var i = 1; i <= 3; i++) {
            stars += '<span class="filled">&#9733;</span>';
        }
        document.getElementById("ratingStars").innerHTML = stars;
        function showRating(value) {
            stars = '';
            for (var i = 1; i <= value; i++) {
                stars += '<span class="filled">&#9733;</span>';
            }
            document.getElementById("ratingStars").innerHTML = stars;
        }
    </script>
</body>

</html>