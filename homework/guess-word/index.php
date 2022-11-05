<?php

$word = "exploration";
$remain = strlen($word);
$answer = [];
$answer[0] = $word[0];
$answer[strlen($word) - 1] = $word[strlen($word) - 1];

for ($i = 1; $i < strlen($word) - 1; $i++) { 
    $answer[$i] = '_';
}

if(isset($_POST['Submit'])){
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
        print "<br>".$answer[count($answer) - 1];
        print "</p>"
    ?>
    <?= 'Remains: '.$remain ?>
    <form action="index.php" method="POST">
        <label for="letter">Enter the letter: 
            <input type="text" name="letter">
            <input type="hidden" name="answer" value="<?= implode(",", $answer) ?>">
            <input type="hidden" name="remain" value="<?= $remain ?>">
        </label>
        <input type="submit" name="Submit" value="Check">
    </form>
</body>
</html>

