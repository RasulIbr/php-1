<?php

// 1. Выводим название файла и номер строки
echo 'Файл: ' . __FILE__ . ', строка: ' . __LINE__ . PHP_EOL;

// 2. Многострочный текст через heredoc
$multilineText = <<<EOF
Это многострочный текст,
созданный с помощью heredoc.
Переменные: $a и $b.
EOF;

echo $multilineText . PHP_EOL . PHP_EOL;

// 3. Сборка фразы из переменных
$a = 'Рыба';
$b = 'человек';
$finalPhrase = "$a рыбою сыта, а $b человеком";

echo $finalPhrase;

?>
