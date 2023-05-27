<?php

function z1()
{
    echo "<h2>" . 'Задание 1' . "</h2>";
    $array = array();
    $sum = 0;
    for ($i = 1; $i < 101; $i++) {
        $array[$i] = $i;
        $sum += $array[$i];
    }
    echo 'Сумма элементов массива $array = ' . $sum;
}

function z2()
{
    echo "<h2>" . 'Задание 2' . "</h2>";
    $array = array('a', 'b', 'c', 'd', 'e');
    $array = array_map('strtoupper', $array);
    echo 'Элементы массива $array: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
}

function z3()
{
    echo "<h2>" . 'Задание 3' . "</h2>";
    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    $arr_count = count($arr);
    echo 'Количество элементов массива $arr = ' . $arr_count;
}

function z4()
{
    echo "<h2>" . 'Задание 4' . "</h2>";
    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    echo 'Элементы массива $arr: ';
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . ' ';
    }
    echo "</br>";
    echo 'Последний элемент массива $arr = ' . $arr[count($arr) - 1];
}

function z5()
{
    echo "<h2>" . 'Задание 5' . "</h2>";
    $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    $count = 0;
    echo 'Элементы массива $array: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    echo "</br>";
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == 3) {
            $count++;
        }
    }
    if ($count != 0)
        echo 'Элемент со значением 3 присутствует в массиве $array';
    else
        echo 'Элемент со значением 3 отсутствует в массиве $array';
}

function z6()
{
    echo "<h2>" . 'Задание 6' . "</h2>";
    $array = array(1, 2, 3, 4, 5);
    echo 'Элементы массива $array: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    echo "</br>";
    echo 'Сумма элементов массива $ array = ' . array_sum($array);
}

function z7()
{
    echo "<h2>" . 'Задание 7' . "</h2>";
    $array = array(1, 2, 3, 4, 5);
    echo 'Элементы массива $array: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    echo "</br>";
    echo 'Произведение элементов массива $array = ' . array_product($array);
}

function z8()
{
    echo "<h2>" . 'Задание 8' . "</h2>";
    $arr = range(1, 5);
    echo 'Элементы массива $arr: ';
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . ' ';
    }
    echo "</br>";
    $SrAr = array_sum($arr) / count($arr);
    echo 'Среднее арифметичествое = ' . $SrAr;
}

function z9()
{
    echo "<h2>" . 'Задание 9' . "</h2>";
    $array = range(1, 100);
    echo 'Элементы массива $array: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
}

function z10()
{
    echo "<h2>" . 'Задание 10' . "</h2>";
    $array = range('a', 'z');
    echo 'Элементы массива $array: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
}

function z11()
{
    echo "<h2>" . 'Задание 11' . "</h2>";
    $array = range(1, 9);
    echo 'Элементы массива $arr до преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    echo "</br>";
    echo 'Элементы массива $array после преобразования: ' . implode('-', $array);
}

function z12()
{
    echo "<h2>" . 'Задание 12' . "</h2>";
    echo 'Сумма чисел от 1 до 100 = ' . array_sum(range(1, 100));
}

function z13()
{
    echo "<h2>" . 'Задание 13' . "</h2>";
    echo 'Произведение чисел от 1 до 10 = ' . array_product(range(1, 10));
}

function z14()
{
    echo "<h2>" . 'Задание 14' . "</h2>";
    $array_1 = array(1, 2, 3);
    echo 'Элементы массива $array_1: ';
    for ($i = 0; $i < count($array_1); $i++) {
        echo $array_1[$i] . ' ';
    }
    echo "</br>";
    $array_2 = array('a', 'b', 'c');
    echo 'Элементы массива $array_2: ';
    for ($i = 0; $i < count($array_2); $i++) {
        echo $array_2[$i] . ' ';
    }
    echo "</br>";
    $array_3 = array_merge($array_1, $array_2);
    echo 'После слияния массивов $array_1 и $array_2: ';
    for ($i = 0; $i < count($array_3); $i++) {
        echo $array_3[$i] . ' ';
    }
}

function z15()
{
    echo "<h2>" . 'Задание 15' . "</h2>";
    $array = range(1, 5);
    $result = array_slice($array, 1, 3);
    echo 'Элементы массива $result: ';
    for ($i = 0; $i < count($result); $i++) {
        echo $result[$i] . ' ';
    }
}

function z16()
{
    echo "<h2>" . 'Задание 16' . "</h2>";
    $array = range(1, 5);
    echo 'Элементы массива $array до преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    array_splice($array, 1, 2);
    echo "</br>";
    echo 'Элементы массива $array после преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
}

function z17()
{
    echo "<h2>" . 'Задание 17' . "</h2>";
    $array = range(1, 5);
    echo 'Элементы массива $array: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    $result = array_splice($array, 1, 3);
    echo "</br>";
    echo 'Элементы массива $result: ';
    for ($i = 0; $i < count($result); $i++) {
        echo $result[$i] . ' ';
    }
}

function z18()
{
    echo "<h2>" . 'Задание 18' . "</h2>";
    $array = range(1, 5);
    echo 'Элементы массива $array до преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    array_splice($array, 3, 0, array('a', 'b', 'c'));
    echo "</br>";
    echo 'Элементы массива $array после преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
}

function z19()
{
    echo "<h2>" . 'Задание 19' . "</h2>";
    $array = range(1, 5);
    echo 'Элементы массива $array до преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    array_splice($array, 1, 0, array('a', 'b'));
    array_splice($array, 6, 0, array('c'));
    array_splice($array, 8, 0, array('e'));
    echo "</br>";
    echo 'Элементы массива $array после преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
}

function z20()
{
    echo "<h2>" . 'Задание 20' . "</h2>";
    $array = array('a' => 1, 'b' => 2, 'c' => 3);
    echo '<pre>';
    echo var_dump($array) . "<br/>";
    echo '</pre>';
    $keys = array_keys($array);
    echo 'Ключи: ';
    for ($i = 0; $i < count($keys); $i++) {
        echo $keys[$i] . ' ';
    }
    echo "</br>";
    $values = array_values($array);
    echo 'Значения: ';
    for ($i = 0; $i < count($values); $i++) {
        echo $values[$i] . ' ';
    }
    echo "</br>";
}

function z21()
{
    echo "<h2>" . 'Задание 21' . "</h2>";
    $array_1 = array('a', 'b', 'c');
    echo 'Элементы массива $array_1: ';
    for ($i = 0; $i < count($array_1); $i++) {
        echo $array_1[$i] . ' ';
    }
    echo "</br>";
    $array_2 = array(1, 2, 3);
    echo 'Элементы массива $array_2: ';
    for ($i = 0; $i < count($array_2); $i++) {
        echo $array_2[$i] . ' ';
    }
    echo "</br>";
    $array_3 = array_combine($array_1, $array_2);
    echo '<pre>';
    echo var_dump($array_3);
    echo '</pre>';
}

function z22()
{
    echo "<h2>" . 'Задание 22' . "</h2>";
    $array = array('a' => 1, 'b' => 2, 'c' => 3);
    echo 'Массив $array до изменений: ';
    echo '<pre>';
    echo var_dump($array) . "<br/>";
    echo '</pre>';
    $array = array_flip($array);
    echo 'Массив $array после изменений: ';
    echo '<pre>';
    echo var_dump($array) . "<br/>";
    echo '</pre>';
}

function z23()
{
    echo "<h2>" . 'Задание 23' . "</h2>";
    $array = range(1, 5);
    echo 'Элементы массива $array до преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    echo "<br/>";
    $array = array_reverse($array);
    echo 'Элементы массива $array после преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
}

function z24()
{
    echo "<h2>" . 'Задание 24' . "</h2>";
    $array = array('a', '-', 'b', '-', 'c', '-', 'd');
    echo 'Элементы массива $array: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    echo "<br/>";
    echo 'Позиция первого элемента "-" в массиве $array = ' . array_search('-', $array);
}

function z25()
{
    echo "<h2>" . 'Задание 25' . "</h2>";
    $array = array('a', '-', 'b', '-', 'c', '-', 'd');
    echo 'Элементы массива $array до преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    echo "<br/>";
    $first = array_search('-', $array);
    array_splice($array, $first, 1);
    echo 'Элементы массива $array после преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
}

function z26()
{
    echo "<h2>" . 'Задание 26' . "</h2>";
    $array = range('a', 'e');
    echo 'Элементы массива $array до преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    echo "<br/>";
    array_replace($array, [0 => '!', 3 => '!!']);
    echo 'Элементы массива $array после преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
}

function z27()
{
    echo "<h2>" . 'Задание 27' . "</h2>";
    $array = array('3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b');
    sort($array);
    echo 'Сортировка по возрастанию элементов: ';
    echo '<pre>';
    echo var_dump($array) . "<br/>";
    echo '</pre>';
    rsort($array);
    echo 'Сортировка по убыванию элементов: ';
    echo '<pre>';
    echo var_dump($array) . "<br/>";
    echo '</pre>';
    ksort($array);
    echo 'Сортировка по возрастанию ключей: ';
    echo '<pre>';
    echo var_dump($array) . "<br/>";
    echo '</pre>';
    krsort($array);
    echo 'Сортировка по убыванию ключей: ';
    echo '<pre>';
    echo var_dump($array) . "<br/>";
    echo '</pre>';
}

function z28()
{
    echo "<h2>" . 'Задание 28' . "</h2>";
    $array = array('a' => 1, 'b' => 2, 'c' => 3);
    echo 'Массив $array: ';
    echo '<pre>';
    echo var_dump($array) . "<br/>";
    echo '</pre>';
    $rand_key = array_rand($array, 1);
    echo 'Случайный ключ из массива $array: ' . $rand_key;
}

function z29()
{
    echo "<h2>" . 'Задание 29' . "</h2>";
    $array = array('a' => 1, 'b' => 2, 'c' => 3);
    echo 'Массив $array: ';
    echo '<pre>';
    echo var_dump($array) . "<br/>";
    echo '</pre>';
    $rand_elem = $array[array_rand($array, 1)];
    echo 'Случайный элемент из массива $array: ' . $rand_elem;
}

function z30()
{
    echo "<h2>" . 'Задание 30' . "</h2>";
    $arr = range(1, 10);
    echo 'Элементы массива $arr до преобразования: ';
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . ' ';
    }
    echo "<br/>";
    shuffle($arr);
    echo 'Элементы массива $arr после преобразования: ';
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . ' ';
    }
}

function z31()
{
    echo "<h2>" . 'Задание 31' . "</h2>";
    $array = range(1, 25);
    echo 'Элементы массива $array до преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    echo "<br/>";
    shuffle($array);
    echo 'Элементы массива $array после преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
}

function z32()
{
    echo "<h2>" . 'Задание 32' . "</h2>";
    $array = range('a', 'z');
    shuffle($array);
    echo 'Элементы массива $array: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
}

function z33()
{
    echo "<h2>" . 'Задание 33' . "</h2>";
    $array = range('a', 'z');
    shuffle($array);
    echo 'Строка: ' . implode('', array_slice($array, 0, 6));
}

function z34()
{
    echo "<h2>" . 'Задание 34' . "</h2>";
    $array = array('a', 'b', 'c', 'b', 'a');
    echo 'Элементы массива $array до преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    echo "<br/>";
    $array = array_unique($array);
    echo 'Элементы массива $array после преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
}

function z35()
{
    echo "<h2>" . 'Задание 35' . "</h2>";
    $array = range(1, 5);
    echo 'Элементы массива $array до преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    echo "<br/>";
    echo 'Первый элемент массива $array: ' . array_shift($array) . "<br/>";
    echo 'Последний элемент массива $array: ' . array_pop($array) . "<br/>";
    echo 'Элементы массива $array после преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
}

function z36()
{
    echo "<h2>" . 'Задание 36' . "</h2>";
    $array = range(1, 5);
    echo 'Элементы массива $array до преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    echo "<br/>";
    array_unshift($array, 0);
    array_push($array, 6);
    echo 'Элементы массива $array после преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
}

function z37()
{
    echo "<h2>" . 'Задание 37' . "</h2>";
    $array = range(1, 8);
    echo 'Элементы массива $array: ';
    while (!empty($array)) {
        echo array_shift($array) . array_pop($array);
    }
}

function z38()
{
    echo "<h2>" . 'Задание 38' . "</h2>";
    $array = array('a', 'b', 'c');
    echo 'Элементы массива $array до преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
    echo "<br/>";
    $array = array_pad($array, 6, '-');
    echo 'Элементы массива $array после преобразования: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
}

function z39()
{
    echo "<h2>" . 'Задание 39' . "</h2>";
    $array = array_fill(0, 10, 'x');
    echo 'Элементы массива $array: ';
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . ' ';
    }
}

function z40()
{
    echo "<h2>" . 'Задание 40' . "</h2>";
    $array = range(1, 20);
    echo '<pre>';
    print_r(array_chunk($array, 5));
    echo '</pre>';
}

z1();
z2();
z3();
z4();
z5();
z6();
z7();
z8();
z9();
z10();
z11();
z12();
z13();
z14();
z15();
z16();
z17();
z18();
z19();
z20();
z21();
z22();
z23();
z24();
z25();
z26();
z27();
z28();
z29();
z30();
z31();
z32();
z33();
z34();
z35();
z36();
z37();
z38();
z39();
z40();
