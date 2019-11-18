<?php
require_once('common.php');

$i = rand(0, count($question)-1);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>QuizGame Question</title>
    </head>
    <body>
        <h1>Question</h1>
        <?= $question[$i][0]; ?>

        <form action = "result.php">
            <Input type = "hidden" name ="qid" value = "<?= $i ?>">
            <Input type = "text" name = "answer">
            <button>kaito</button>
        </form>
    </body>
</html>