<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Document</title> 
    </head> 
<body> 
<?php 
    $upload_dir = "./test/"; 
    $to = iconv("UTF-8", "Big5", $_FILES["myfile"]["name"]);
    $upload_file = $upload_dir.$to; 
    //將上傳的檔案由暫存目錄移至指定之目錄 
    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $upload_file))
    { 
        echo "<strong></strong><hr>"; 
    } 
    else 
    { 
        echo " (". $_FILES["myfile"]["error"] . ")<br><br>"; 
        echo "<a href='javascript: history.back()'>重新上傳</a>"; 
    } 
?> 
</body>
 </html>