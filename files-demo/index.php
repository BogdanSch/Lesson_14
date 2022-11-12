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

// $file = fopen("text.txt","r");
// $content = fread($file,"12");//читає 10 байтів з файлу
// echo $content;
// fclose($file);

// $file = fopen("file.txt", "r");
// while(!feof($file)){
//     echo fgets($file)."<br>";
// }

// $row = 1;
// if (($handle = fopen("contacts.csv", "r")) !== FALSE) {
//     while (($data = fgetcsv($handle, 1000)) !== FALSE) {
//         $num = count($data);// количество полей в строке
//         for ($c=0; $c < $num; $c++) {
//             echo $data[$c] . "\n";
//         }
//     }
//     fclose($handle);
// }

// $list = [
//     ['aaa', 'bbb', 'ccc', 'dddd'], 
//     array('123', '456', '789'), 
//     array('aaa', 'bbb') 
// ];
   
// $fp = fopen ( 'file.csv' , 'w' ); 
   
// foreach ($list as $fields) { 
//     fputcsv ($fp , $fields); 
// } 
// fclose ($fp);

// $n = readfile ("my_file.html");
// if (!$n) 
//     echo "Ошибка чтения из файла"; // если ошибка была, то выводим сообщение
// else 
//     echo $n; // если ошибки не было, то выводим число считанных символов

$homepage = file_get_contents('http://php.net'); 
echo $homepage;