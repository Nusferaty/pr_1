<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting array</title>
</head>
<body>
<?php

// Проверяем пустоту параметра
if (!empty(isset($_GET['array']))) {
    // Получаем строку параметра и разбиваем на массив по разделителю
    $array = explode(",", $_GET['array']);

    // Проверяем пустоту массива
    if (count($array) == 0) {
        // Выводим сообщение о том, что массив пуст
        print('Array is empty');
        // Прерываем выполнение программы
        exit(0);
    }

    // Выводим первоначальный массив на экран
    print('Array: ' .
        implode(', ', $array));
    // Сортировка массива
    sortArray($array);

    // Выводим отсортированный массив
    print(nl2br("\r\n"));
    print('Sorted array: ' . implode(', ', $array));
}

// Функция сортировки вставками
function sortArray(&$arr) {
    // Проходим по массиву
    for ($i = 0;$i < count($arr); $i++) {
        $j = $i - 1;
        $val = $arr[$i];
        while ($j >= 0 && $arr[$j] > $val) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $val;
    }
}

?>
</body>
</html>