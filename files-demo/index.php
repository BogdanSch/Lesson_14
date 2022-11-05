<?php

// $h = fopen("file.txt","a+"); // Буде відкритий файл нульової довжини "my_file.html" для записи.
// $text = "Цей текст запишемо в файл."; 

// if (fwrite($h, $text)) 
//    echo "Запис зроблено успішно"; 
// else 
//    echo "Виникла помилка при запису даних";

// $h = fopen("my_file.html","a+");
// $add_text = "Додамо новий текст у файл.";
// if(fwrite($h, $add_text))
//     echo "Додавання тексту пройшло успішно";
// else 
//     echo "Виникла помилка  при добавлении данных";

// $a = array("a"=>"aa", "b"=>"bb", "c"=>array("х"=>"хх"));
// $st = serialize($a);

// if(fwrite($h, $st))
//     echo "Додавання тексту пройшло успішно";
// else 
//     echo "Виникла помилка  при добавлении данных";

$file = fopen("text.txt","r");
$content = fread($file,"12");//читає 10 байтів з файлу
echo $content;
fclose($file);