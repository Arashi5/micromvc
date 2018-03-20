<?php
$string = '7(965)-34--45123 тел.';
$result = preg_replace('/[^0-9]/u', '', $string);
$result2 = preg_replace('/(\d)(\d{3})(\d{3})(\d{4})/u', '+$1 ($2) $3-$4', $result);

echo 'Как было: '.$string . PHP_EOL;
echo 'Стало: '.$result . PHP_EOL;
echo 'Стало 2: '.$result2 . PHP_EOL;