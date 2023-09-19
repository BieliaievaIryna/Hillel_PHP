<?php

ob_start();

$variable1 = 'Edinburgh Festival';
$variable2 = 'Art Festival';

require_once 'index.php';

$content = ob_get_contents();

$content = str_replace([$variable1, $variable2], ["<b>$variable1</b>", "<b>$variable2</b>"], $content);
$content = str_replace('UK', "<b>United Kingdom</b>", $content);

ob_end_clean();

echo $content;

//version II

ob_start();

$variable1 = 'Edinburgh Festival';
$variable2 = 'Art Festival';

require_once 'index.php';

$content = ob_get_contents();
function changeContent (string &$text, string &$var1, string &$var2): void
{
    $text = str_replace([$var1, $var2], ["<b>$var1</b>", "<b>$var2</b>"], $text);
    echo $text;
}

ob_end_clean();

changeContent($content, $variable1, $variable2);
