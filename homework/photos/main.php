<?php

$directory = "photos";
$files = array_diff(scandir($directory), array('..', '.'));
chdir($directory);

foreach ($files as $value) {
    $month = $value[8]."".$value[9];
    mkdir("$month");
    rename("./$value", "./$month/$value");
}

// $photo_name = basename("IMG_20221028_131539.jpg");