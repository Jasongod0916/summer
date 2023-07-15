<?php

$type=exif_imagetype("cat.jpg");
echo "<h1>類型:".$type."<br>";

$weight=getimagesize("cat.jpg")[0];
echo "<h1>寬:".$weight."<br>";

$height=getimagesize("cat.jpg")[1];
echo "<h1>高:".$height."<br>";

$format=getimagesize("cat.jpg")[2];
echo "<h1>格式:".$format."<br>";

$imName=getimagesize("cat.jpg")[3];
echo "<h1>名稱:".$imName."<br>";
?>















