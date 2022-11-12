<?php

$file = fopen("library.txt", "r+");

$res = fread($file, filesize("library.txt"));
$library = unserialize($res);

function walk_library($val, $key){
    print "<tr>";
    foreach ($val as $key => $value) {
        print "<td style='border: 1px solid #dddddd'>";
        echo $value;
        print "</td>";
    }
    print "</tr>";
}

print '<table style="width: 100%;border-collapse: collapse;">';
echo "<tr><th style='border: 1px solid #dddddd'>Book</th><th style='border: 1px solid #dddddd'>Author</th><th style='border: 1px solid #dddddd'>Date</th></tr>";
array_walk($library, "walk_library");
print '</table>';

fclose($file);