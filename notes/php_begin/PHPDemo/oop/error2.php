<?php


try {
    $content  = file_get_contents('https://xueyuanjun.com/error');
} catch (Error $error) {
    var_dump($error);
}

//var_dump($content);

