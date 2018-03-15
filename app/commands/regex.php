<?php
$string = '7(999)400-1984 тел.';
$result = preg_replace('/[^0-9]/u', '', $string);
$result2 = preg_replace('/(\d)(\d{3})(\d{3})(\d{4})/u', '+$1 ($2) $3-$4', $result);

echo 'было' . $string . PHP_EOL;
echo 'стало' . $result . PHP_EOL;
echo 'стало 2' . $result2 . PHP_EOL;