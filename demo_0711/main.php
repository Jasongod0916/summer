<?php
setcookie("name",$_POST["name"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function 重設高度(){
            let ifr=document.getElementById("car");
            ifr.height=ifr.contentDocument.body.offsetHeight+30;
        }
    </script>
</head>
<body bgcolor="lightyellow">
<h1 align="center">暑假可憐賣書網</h1>
<iframe src="show_link.html" frameborder="0" height="50px" width="100%"></iframe>
<h2>hello</h2>
<iframe src="catalog.php" id="car" style="border:1px solid #000;" name="bottom" frameborder="0" onload="重設高度();" width="100%" ></iframe>
</body>
</html>