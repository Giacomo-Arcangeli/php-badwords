<?php
 $answer = $_GET['answer'];
 $word = $_GET['word'];
 $final_answer = trim($answer);
 $length_answer = strlen($final_answer);
 $censurated = str_replace($word , '***' , $final_answer);
 $length_censurated = strlen($censurated);
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h2>Paragrafo originale</h2>
    <p><?= $answer ?></p>
    <h3>Il paragrafo è lungo <?= $length_answer ?> caratteri</h3>

    <h2>Paragrafo censurato</h2>
    <p><?= $censurated ?></p>
    <h3>Il paragrafo è lungo <?= $length_censurated ?> caratteri</h3>

 </body>
 </html>