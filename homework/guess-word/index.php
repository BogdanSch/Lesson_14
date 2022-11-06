<?php

$word = "exploration";

$count = 0;
$remain = strlen($word) - 2;
$answer = [];
$answer[0] = $word[0];
for ($i = 1; $i < strlen($word) - 1; $i++) { 
    $answer[$i] = '_';
}
$answer[strlen($word) - 1] = $word[strlen($word) - 1];

if(isset($_POST['Submit'])){
    $count = $_POST['count'] + 1;
    $letter = $_POST['letter'];
    $answer = explode(",", $_POST['answer']);
    $remain = $_POST['remain'];

    for ($i = 1; $i < strlen($word) - 1; $i++) { 
        if($word[$i] === $letter){
            $answer[$i] = $letter;
            $remain--;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess a word</title>
</head>
<body>
    <h1>Guess a word</h1>
    <?php
        print "<p>"; 
        for ($i = 0; $i < count($answer); $i++) { 
            echo $answer[$i]." ";            
        }
        print "</p>"
    ?>
    <?= 'Remains: '.$remain ?>
    <?php
         if($remain == 0){
            echo "<h1>You won!</h1>";
        }
        echo "<h3>$count| Move</h3>"
    ?>
    <form action="index.php" method="POST">
        <label for="letter">Enter the letter: 
            <input type="text" name="letter">
            <input type="hidden" name="answer" value="<?= implode(",", $answer) ?>">
            <input type="hidden" name="remain" value="<?= $remain ?>">
            <input type="hidden" name="count" value="<?= $count ?>">
        </label>
        <input type="submit" name="Submit" value="Check">
    </form>
</body>
</html>

