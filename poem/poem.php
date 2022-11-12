<?php

$file = fopen("poem.txt", "r+");

$site_start = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poem</title>
</head>
<body>
    <pre>';
$site_end = "</pre>
</body>
</html>";

$site_content = fread($file,filesize("poem.txt"));

$path = "poem";
if(!is_dir($path)){
    mkdir($path);
}

chdir($path);
$html = fopen("poem.html", "w");
fwrite($html, $site_start);
fwrite($html, "\n");
fwrite($html, $site_content);
fwrite($html, $site_end);

fclose($html);
fclose($file);