<?php

/**
 * 1. Сделайте функцию, которая возвращает куб числа. Число передается параметром.
 *
 * @param integer $num Number
 *
 * @return int
 */

function cub($num)
{
    return $num ** 3;
    
    
}

echo cub(3);
echo '<br>';


/**
 * 2.    Сделайте функцию, которая возвращает сумму двух чисел.
 * Числа передаются ей первым и вторым параметром.
 *
 * @param integer $num1 First number
 * @param int     $num2 Second number
 *
 * @return int
 *
 */
function sum($num1, $num2)
{
    return ($num1 + $num2);
}

echo sum(2, 3);

echo '<br>';
/**3.    Сделайте функцию, которая отнимает от первого числа второе и делит на третье.
 *
 * @param int $num1
 * @param int $num2
 * @param int $num3
 *
 * @return float/int
 */
function div($num1, $num2, $num3)
{
    return ($num1 - $num2) / $num3;
}

echo div(10, 5, 2);
echo '<br>';
/**4.    Сделайте функцию, которая на вход принимает параметр в виде массива,
 * разворачивает массив и возвращает результат.
 *
 * @param $arr
 *
 * @return $result
 */
function my_reverse($arr)
{
    $result = [];
    $count = count($arr) - 1;
    for ($i = $count; $i >= 0; $i--) {
        $result[] = $arr[$i];
    }
    
    return $result;
}

echo "<pre>";
var_dump(my_reverse([0, 1, 2, 3, 4]));
echo "</pre>";
/**
 * 5.    Сделайте функцию, которая принимает параметром число и проверяет четное оно или нет.
 *
 * @param $num
 *
 * @return void
 */
function my_odd($num)
{
    echo ($num % 2 == 0) ? 'Even' : 'Odd';
}

my_odd(2);
echo '<br>';
/**
 * 6.    Сделайте функцию, которая принимает параметром массив, а возвращает массив из четных элементов этого массива.
 *
 * @param array $arr
 *
 * @return $result
 */
function my_even_array($arr)
{
    $result = [];
    $count = count($arr);
    for ($i = 0; $i < $count; $i++) {
        if ($i % 2 != 0) {
            
            $result[] = $arr[$i];
        }
    }
    
    return $result;
}

echo "<pre>";
var_dump(my_even_array(['a', 'b', 'c', 'd', 'e']));
echo "</pre>";
echo '<br>';
/**
 * 7.    Сделайте функцию, которая принимает параметром строку, а возвращает первые N символов этой строки (N – это второй параметр). Функция должна добавлять троеточие в конце возвращаемой строки.
 *
 * @param string $str
 * @param int    $length
 *
 * @return bool|string
 */
function my_substr($str, $length)
{
    $count = strlen($str);
    if ($count < $length) {
        echo 'Запрашиваемая длинна строки больше чем длинна строки';
        
        return false;
    }
    $result = '';
    for ($i = 0; $i < $length; $i++) {
        $result .= $str[$i];
    }
    $result .= '...';
    
    return $result;
}

echo my_substr('Hello,world', 4);
/*
 *
 * 8.    Напишите функцию, которая в качестве параметра принимает массив, меняет у него ключи со значениями. Например $arr = array(‘php’ => ‘PHP’, ‘java’ => ‘Java’); А результатом будет array(‘PHP’ => ‘php’, ‘Java’ => ‘java’).
 *
 * @param $arr
 *
 * @return array
 */
function my_array_flip($arr)
{
    $result = [];
    foreach ($arr as $key => $value) {
        $result[$value] = $key;
    }
    
    return $result;
}

$test = ['php' => 'PHP', 'java' => 'Java'];
$result = my_array_flip($test);
echo "<pre>";
var_dump(my_array_flip($test));
echo "</pre>";
echo '<br>';
/**
 * 9.    Напишите функцию, которая будет считать сумму цифр числа переданного пользователем в функцию.
 * Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
 * Также функция должна сделать проверку на корректность введения данных пользователем
 * (т.е. число больше нуля. не пустая строка, не равно null).
 *
 *
 * @param int $num
 *
 * @return int
 */
function my_sum_numb($num)
{
    if (empty ($num)) {
        echo 'Empty value!';
        
        return 0;
    }
    $result = 0;
    $count = strlen($num);
    settype($num, 'string');
    $count = strlen($num);
    for ($i = 0; $i < $count; $i++) {
        $result += $num[$i];
    }
    
    return $result;
}

echo my_sum_numb(123);
echo '<br>';

/**
 * 10.    Напишите функцию, которая возвращает число длиной $length ($length - это параметр функции,
 * который отвечает за длину числа).
 *
 * @param int $length
 *
 * @return string
 */

function my_random($length)
{
    $result = '';
    for ($i = 0; $i < $length; $i++) {
        $result .= rand(0, 9);
    }
    
    return $result;
}

echo my_random(5);
$res_my_random = my_random(7);
echo $res_my_random;
echo '<br>';

/**
 * 11.    На основании предыдущей задачи необходимо написать функцию, которая принимает два параметра:
 * первый - это число, которое возвращает функция в задаче №3 ($x), второй параметр
 * - это любое ваше число ($y). Функция должна подсчитать количество вхождений $y в числе $x.
 * Например: цифра 5 в числе 442158755745 встречается 4 раза.
 *
 * @param int $num1
 * @param int $num2
 *
 * @return string
 */

function my_str_str($num1, $num2)
{
    if (empty ($num1) && empty ($num2) !== 0 && !empty($num2)) {
        return 'Empty value!';
        
        return 0;
    }
    $result = 0;
    settype($num1, 'string');
    $count = strlen($num1);
    
    for ($i = 0; $i < $count; $i++) {
        if ((int) $num1[$i] == (int) $num2) {
            $result++;
        }
    }
    
    return "<p>В числе <strong>$num1</strong> " .
        "число <strong>$num2</strong> встречается <strong>$result</strong> раз.</p>";
}

echo my_str_str($res_my_random, rand(0, 9));
/**12.    Написать функцию, которая возвращает массив длиной $length, заполненный случайными числами (можно воспользоваться функцией rand).
 *
 * @param $length
 *
 * @return array
 */

function my_random_array($length)
{
    $result = [];
    for ($i = 0; $i < $length; $i++) {
        $result[] = rand(0, 9);
    }
    
    return $result;
}

$res_my_random_arr = my_random_array(7);
echo "<pre>";
var_dump($res_my_random_arr);
echo "</pre>";
/**13.    Написать функцию, которая в качестве параметра принимает массив из задачи №4. Функция находит максимальное и минимальное значение массива и меняет их местами.
 *
 *
 * @param $arr
 *
 * @return array
 */

function my_min_max($arr)
{
    
    $count = count($arr);
    $min = $max = 0;
    for ($i = 0; $i < $count; $i++) {
        if ($arr[$i] < $arr[$min]) {
            $min = $arr[$i];
        }
        if ($arr[$i] > $arr[$max]) {
            $max = $arr[$i];
        }
        $var = $arr[$max];
        $arr[$max] = $arr[$min];
        $arr[$min] = $var;
    }
    
    return [$arr, $max, $min];
}

list($res, $min, $max) = my_min_max($res_my_random_arr);

echo "<p> 'Minimum element <strong>$res[$min](index: $min)</strong>и максимальный элемент<strong>$res[$max](index: $max)</strong>. </p>";
echo "<pre>";
var_dump($res);
echo "</pre>";


/**
 * 14.    Написать функцию, которая в качестве параметра принимает натуральное число n.
 * Вычислить: 11 + 22 + .. + nn.
 * Вывести на экран степени этих чисел, а также сумму степеней этих чисел.
 *
 * @param int $an
 *
 * @return array|int
 */

function mult($an)
{
    $sum = 0;
    $arr = array();
    for ($i = 1; $i <= $an; $i++) {
        $arr[$i] = ($i ** $i);
        $sum += $arr[$i];
    }
    return [$sum, $arr];
}

list($sum, $arr) = mult(5);
echo $sum;
echo '<br>';
echo "<pre>";
var_dump($arr);
echo "</pre>";
