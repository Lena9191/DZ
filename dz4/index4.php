<?php
/**
 * 1. Дан массив с произвольными числами.
 * Сделайте так, чтобы элемент повторился в массиве количество раз,
 * соответствующее его числу. Пример: array(1, 3, 2, 4)
 * превратится в array(1, 3, 3, 3, 2, 2, 4, 4, 4, 4).
 *
 * @param $arr
 *
 * @return array
 */
function num_repeat($arr)
{
    $count = count($arr);
    $result = [];
    for ($i = 0; $i < $count; $i++) {
        for ($a = 0; $a < $arr[$i]; $a++) {
            $result[] = $arr[$i];
        }
    }
    
    return $result;
}

$array = array(1, 3, 2, 4);
$ar = num_repeat($array);
echo "<pre>";
var_dump($ar);
echo "</pre>";


/*$arr=array(1, 3, 2, 4);            //создаем массив
$arr1=array();                  //создаем массив для вывод нового массива
$n=count($arr);                 //создаем, который будет считать ключи массива
for ($i=0;$i<=$n;$i++)
{
    
    for ($a=1;$a<=$arr[$i];$a++)// создаем цикл в цикле, второй цикл добавляет к элементам массива кол. равное
    {$arr1[]+=$arr[$i];         //элементу 1-го массива
    }
}
print_r($arr1);
echo '<br><br><br>';*/


/**
 *2.    Дан массив с произвольными целыми числами.
 * Сделайте так, чтобы первый элемент стал ключом второго элемента,
 * третий элемент - ключом четвертого и так далее.
 * Пример: array(1, 2, 3, 4, 5, 6) превратится в array(1=>2, 3=>4, 5=>6).
 *
 * @param $arr
 */
//$arr2 = array(1, 2, 3, 4, 5, 6);
//$arr3 = array();
//$n = count($arr2);
//for ($i = 0; $i <= $n - 1; $i = $i + 2) {                //создаем элементы массива, где
//    $x = $arr2[$i];
//    $arr3[$x] = $arr2[$i + 1];
//}
//print_r($arr3);
//
//
//echo "<br>";

/*
 * 2.	Дан массив с произвольными целыми числами. Сделайте так,
 * чтобы первый элемент стал ключом второго элемента, третий элемент -
 * ключом четвертого и так далее. Пример: array(1, 2, 3, 4, 5, 6) превратится
 * в array(1=>2, 3=>4, 5=>6).
 * */
/**
 * @param $arr
 *
 * @return array
 */
function array_revert($arr)
{
    $count = count($arr) / 2;
    $result = [];
    $index = 0;
    for ($i = 0; $i < $count; $i++) {
        $value = 0;
        if (isset($arr[$index + 1])) {
            $value = $arr[$index + 1];
        }
        $result[$arr[$index]] = $value;
        $index += 2;
    }
    
    return $result;
}

$arr = array(1, 2, 3, 4, 5, 6, 7);
$result = array_revert($arr);
echo "<pre>";
var_dump($result);
echo "</pre>";

/**3.    Дана строка. Удалите из этой строки четные символы.
 *
 * @param string $str
 *
 * @return string
 */
function my_odd($str)
{
    $length = strlen($str);
    $result = '';
    for ($i = 0; $i < $length; $i++) {
        if ($i % 2 == 0) {
            $result .= $str[$i];//приконкотенировали к строке
        }
    }
    
    return $result;
}

$result = my_odd('jfhfjdsndksfjg');
echo $result;
echo '<br>';
/*4.	Дана строка. Поменяйте ее первый символ на второй и наоборот,
третий на четвертый и наоборот, пятый на шестой и наоборот и так далее.
То есть из строки '12345678' нужно сделать '21436587'.
/**
 * @param $str string
 *
 * @return string
 */
function str_revert($str)
{
    $length = strlen($str) / 2;
    $result = '';
    $index = 0;
    for ($i = 0; $i < $length; $i++) {
        $result .= $str[$index + 1] . $str[$index];
        $index += 2;
    }
    
    return $result;
}

$result = str_revert('12345678');
echo $result;
echo '<br>';

/**
 * 5.    Напишите функцию, которой в параметре передается передается массив из случайных чисел.
 * Функция возвращает массив из уникальных (не повторяющихся) значений (аналог функции array_unique).
 *
 * @param $arr
 *
 * @return array
 */
function my_array_unique($arr)
{
    $result = [];// создаем массив
    foreach ($arr as $key => $value) {//переьираем массив функции
        $isDuplicate = false;
        foreach ($result as $key2 => $value2) {// перебираем наш новый массив
            if ($value == $value2) {
                $isDuplicate = true;
                break;
            }
        }
        
        if (!$isDuplicate) {
            $result[$key] = $value;
        }
    }
    
    return $result;
}

$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = my_array_unique($input);
echo "<pre>";
var_dump($result);
echo "</pre>";
echo '<br>';

/**6.	Напишите функцию, которая будет противоположной array_unique, т.е. будет оставлять дубликаты, но удалять не повторяющиеся значения.
 *
 * @param $arr array
 *
 * @return array $notunique
 */
function my_array_not_unique($arr)
{
    $unique = [];
    //collect unique elements
    foreach ($arr as $key => $value) {
        if (isset($unique[$value])) {
            $unique[$value]++;
        } else {
            $unique[$value] = 1;
            
        }
    }
    //collect not unique
    $notunique = [];
    foreach ($unique as $key => $value) {
        if ($value > 1) {
            for ($i = 0; $i < $value; $i++) {
                $notunique[] = $key;
            }
            
        }
    }
    
    return $notunique;
}

$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = my_array_not_unique($input);
echo "<pre>";
var_dump($result);
echo "</pre>";
echo '<br>';

/*7.	Напишите функцию, которой передается фамилия имя и отчество, а функция возвращает фамилию и инициалы. Например, передаем Ivanov Ivan Ivanovich и нам выводит: Ivanov I. I.

*/
/**
 * @param array $str
 *
 * @return string,array
 
 */
function my_name($str)
{
    $result = '';
    $length = strlen($str);
    $word = '';
    $words = [];
    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] == ' ') {
            $words[] = $word;
            $word = '';
        } elseif ($i == $length - 1) {
            $word .= $str[$i];
            $words[] = $word;
        } else {
            $word .= $str[$i];
        }
    }
    $result = [];
    if (!empty($words)) {
        foreach ($words as $key => $word) {
            if ($key == 0) {
                $result[] = $word;
            } else {
                $result[] = $word{0} . '.';
            }
        }
    }
    
    return implode('', $result);
}

$result2 = my_name('Ivanov Ivan Ivanovich');
echo $result2;
echo '<br>';


/**
 * 8.    (+1) Таблица умножения. Напишите функцию, которая принимает на вход два параметра: количество строк и количество колонок.
 * Функция возвращает (не выводит на экран!) таблицу умножения вида http://joxi.ru/brR577kiJJNRXA.
 * Можно использовать table или div теги html.
 * Цвет перемножаемых колонок и строк можете задать отдельным третьим параметром в виде hex-кода цвета.
 *
 * @param $rows
 * @param $colls
 *
 * @return string
 */
function multitable($rows, $colls)
{
    $table = '<table width="100%" border="1">';
    for ($i = 1; $i <= $rows; $i++) {
        $table .= '<tr align="center">';
        for ($j = 1; $j <= $colls; $j++) {
            if ($i == 1 || $j == 1) {
                $style = 'style="background-color:green; color:white; height: 35 px; width: 20px"';
                $table .= "<th $style>" . $i * $j . '</th>';
            } else {
                $table .= '<td>' . $i * $j . '</td>';
            }
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    
    return $table;
}

echo multitable(25, 25);
echo '<br>';

/*
 * 9.	(+1) Написать рекурсивную функцию, которая на вход получает число и вычисляет и возвращает значение факториала этого числа. Обязательно сюда вернуться!!!
 * @param $n
 */
function fibonacci($num)
{
    if ($num < 3) {
        return 1;
    } else {
        fibonacci($num - 1) + fibonacci($num - 2);
    }
    return ($num);
}
echo fibonacci(8);
echo '<br>';
/*
 * 10. Написать функцию (рекурсивную либо обычную - по желанию), которая принимает на вход параметр
 * (например, $n) и вычисляет число Фибоначчи до предела $length.
 * Результат вычисления возвращается этой же функцией.
 * @param integer $length
 * @return int
 */


function fibonacci_limited($limit)
{
    $result = '';
    for ($n = 1; $n <= $limit; $n++) {
        $result .= fibonacci($n);
        if ($n != $limit) {
            $result .= ', ';
        }
    }
    
    return $result;
}

echo fibonacci_limited(8);
echo '<br>';

/*
 *12.	Напишите функцию, которая подсчитывает количество всех значений массива. Функция должна учитывать вложенность массивов. (функцией array_count_values пользоваться нельзя).
 */
/**
 * @param $arr
 *
 * @return array
 */
function my_array_count_values($arr)
{
    $result = [];
    foreach ($arr as $key => $value) {
        if (isset($result[$value])) {
            $result[$value]++;
        } else {
            $result[$value] = 1;
        }
    }
    
    return $result;
}

$array = ['a', 'a', 'b', 'c', 'c', 'd'];
$result = my_array_count_values($array);
echo "<pre>";
var_dump($result);
echo "</pre>";
echo '<br>';

/**
 * 11. Напишите рекурсивную функцию, принимающую на вход натуральное число $n.
 * Функция возвращает строку из всех чисел от 1 до $n либо от $n до 1. За порядок сортировки должен отвечать
 * дополнительный параметр функции - $order, который может принимать значение ‘desc’ (убывающий)
 * или ‘asc’ (возрастающий) и по-умолчанию должен быть равен ‘desc’.
 *
 * @param int    $num
 * @param string $order
 *
 * @return string $result
 * */
function my_sort_rand($num, $order = 'desc')
{
    $result = '';
    static $index = 1;
    
    if ($order == 'desc') {
        if ($num == 0) {
            return $result;
        }
        $result .= $num;
        $num--;
    } elseif ($order == 'asc') {
        $result .= $index;
        if ($index == $num) {
            return $result;
        }
        $index++;
    }
    
    $result .= my_sort_rand($num, $order);
    
    return $result;
}

$res = my_sort_rand(5);
echo $res;
echo '<br>';
$res = my_sort_rand(5, 'asc');
echo $res;
echo '<br>';


