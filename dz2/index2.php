<?php
/*
1.	Создайте массив $arr=array('joomla', 'wordpress', 'netcat'). Выведите значение массива на экран с помощью команды var_dump().
*/
// //$arr=array("joomla", "wordpress", "netcat");
// //var_dump($arr);

//  2.	С помощью массива $arr из предыдущего номера выведите на экран содержимое первого, второго и третьего элементов.
//$arr=array("joomla", "wordpress", "netcat");
//echo $arr[0].'<br>'. $arr[1]. '<br>'. $arr[2]. '<br>';


/*3.	Создайте массив $arr=array('html', 'css', 'php') и с его помощью выведите на экран строку 'php, html, css'.*/
//echo $arr[0]." ".$arr[1]."  ".$arr[2];
//$arr=array("html","php","css");
//echo $arr[0]." ".$arr[1]." ".$arr[2];
/*4.	Создайте массив $arr с элементами 2, 5, 3, 9. Умножьте первый элемент массива на второй, а третий элемент на четвертый. Результаты сложите, присвойте переменной $result. Выведите на экран значение этой переменной.*/
//$arr = array('0' => 2, '1' => 5, '2' => 3, '3' => 9);
//$a=$arr[0]*$arr[1];
//$b=$arr[2]*$arr[3];
//$result=$a+$b;
/*5.	Создайте массив $arr с элементами 'a', 'b', 'c', 78 двумя различными способами.*/
//$arr = array('0' => 'a', '1' => 'b', '2' => 'c');
//echo "$arr[0]". "$arr[1]". "$arr[2]";
//$arr[]='a';
//$arr[]='b';
//$arr[]='c';
//echo "$arr[0]". "$arr[1]". "$arr[2]"


/*6.	Создайте массив $arr с элементами 'Я', 'учу', 'PHP', '!'. С его помощью выведите на экран фразу 'Я учу PHP!'.*/
//$arr = array ('Я', 'учу', 'PHP', '!');
//echo "$arr[0]".  "$arr[1]". "$arr[2]". "$arr[3]";
/* 7.	Создайте массив $arr=array('a', 'b', 'c', 'd', 'e'). С помощью одной переменной $var сделайте из него массив array('e', 'd', 'c', 'b', 'a'). */
//$arr=array ('a', 'b', 'c', 'd', 'e');
//$var=$arr[1];
//$arr[1]=$arr[3];
//$arr[3]=$var;
//$var=$arr[0];
//$arr[0]=$arr[4];
//$arr[4]=$var;
//var_dump($arr);
/* 8. Создайте массив $arr=array('a', 'b', 'c', 'd', 'e'). С помощью одной переменной $var поменяйте местами элементы 'b' и 'c'*/
//$arr=array ('a', 'b', 'c', 'd', 'e');
//$var=$arr[1];
//$arr[1]=$arr[2];
//$arr[2]=$var;
//var_dump($arr);
/* 9.	Создайте массив $arr. Выведите значение массива на экран с помощью команды var_dump(). (Это все?)*/

//$arr = array('text'=>'текст!', 1=>'125', 'key'=>'element');
//  var_dump($arr);
/* 10. Создайте массив заработных плат $arr. Выведите на экран зарoплату Пети и Коли.*/
//  $arr = array('Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$');
//echo $arr['Коля'];
//echo '<br>';
//echo $arr['Петя'];
/*11.	Из условия задачи выше поменяйте местами зарплаты Коли и Пети.*/
//$arr = array('Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$');
//$var=$arr['Коля'];
//$arr['Коля']=$arr['Петя'];
//$arr['Петя']=$var;
//echo $arr['Коля'];
//echo '<br>';
//echo $arr['Петя'];
/* 11.	Из условия задачи выше поменяйте местами зарплаты Коли и Пети.

//12. Создайте массив $arr с ключами 'I', 'study', 'php', 'sign' и соответствующими элементами 'Я', 'учу', 'PHP', '!'. С его помощью выведите на экран фразу 'Я учу PHP!'.*/
//$arr=array('I'=>'Я','study'=>'изучаю', 'php'=>'PHP', 'sign'=>'!');
//echo $arr['I'];
//echo $arr['study'];
//echo $arr['php'];
//echo $arr['sign'];

/*13. Создайте многомерный массив $arr. С его помощью выведите на экран слова 'joomla', 'drupal', 'зеленый', 'красный'.

$arr = array(
'cms'=>array('joomla','wordpress', 'drupal'),
'colors'=>array('blue'=>'голубой','red'=>'красный', 'green'=>'зеленый')
    );*/
// $arr = array(
// 'cms'=>array('joomla','wordpress', 'drupal'),
// 'colors'=>array('blue'=>'голубой','red'=>'красный', 'green'=>'зеленый')
// );
// echo $arr['cms'][0].'<br>'. $arr['cms'][1].'<br>'. $arr['colors']['green'].'<br>'.$arr['colors']['red'];




/*14.	Создайте двумерный массив. Первые  два ключа — это 'ru' и 'en'. Первый ключ содержит элемент, являющийся массивом названий дней недели по-русски, а второй — по-английски.*/
//$arr=array('ru'=>array('понедельник','вторник','среда','четверг','пятница','суббота','воскресенье'),'en'=>array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'));
//echo $arr['en'][5];
/*1.	Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.*/
//$arr=array('a'=>'HTML', 'b'=>'CSS', 'c'=>'PHP');
//foreach($arr as $value){
//echo $value . '<br>';
//}
/*2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.*/
// $arr=array(1,20,15,17,24,35);
// $result=0;
// foreach($arr as $value){
// $result=$result+$value;
// }
// echo $result;
/*3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.*/
//$arr=array(26,17,136,12,79,15);
//$result=0;
//foreach ($arr as $number){
//$result+=$number*$number;
//}
//echo $result;

/*4.	Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');*/
//$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
//foreach ($arr as $key=>$value)
//	{
//		echo $key.' '.$value.'<br>';

//}
/*5.Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200 долларов.'.*/
// $arr=array('Коля'=>'200','Вася'=>'300','Петя'=>'400');
// foreach ($arr as $key=>$value)
// {
// 	echo $key.' - '.'зарплата '.$value.' долларов<br>';
// }
// $arrlength=count($arr);
/*6.	Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array('green', 'red','blue');
$ru = array('зеленый', 'красный', 'голубой');
*/

//$arr=array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
//$en=array();
//$ru=array();
//foreach ($arr as $key=>$value){
//	$en[]=$key;
//	$ru[]=$value;
//	print_r($ru);
//}

/*7.	Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, значения которых больше 3-х, но меньше 10.*/
//$arr=array(2,5,9,15,0,4);
//foreach($arr as $value)
//{
//if($value>3&&$value<10)
//{
//echo $value.'<br>';
//}
//}
/*8.	Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '-1-2-3-4-5-6-7-8-9-'.*/
//$arr=array(1,2,3,4,5,6,7,8,9);
//$str='';
//foreach($arr as $value)
//{
//	$str.='-'.$value;
//}
//echo $str.'-';
/*9.	 Выведите столбец чисел от 1 до 100.*/
//$i=1;
//while ($i<=100)
//{
//	echo $i.'<br>';
//$i++;
//}
/*10.	Выведите столбец чисел от 11 до 33*/
//$i=11;
//while ($i>=11&&$i<=33)
//{
//	echo $i.'<br>';
//		$i++;
//	}
/*11.	Выведите столбец четных чисел в промежутке от нуля до 100.
*/
//$i=0;
//for ($i=0; $i<=100; $i+=2)
//{
//	echo $i.'<br>';
//}
/*12.	Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерации — это количество проходов цикла), и запишите его в переменную $num.*/
//$n=1000;
//$i=0;
//while($n>50){
//	$i++;
//	$n/=2;
//}
//echo $i. '<br>';
//echo $n;
/*13. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3-х, но меньше 10.*/
//$arr=array(4, 2, 5, 19, 13, 0, 10);
//foreach($arr as $value)
//{
//	If($value>3&&$value<10)
//  {echo $value. '<br>';
//}
//}
/*14.	Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'.*/
//$arr=array(4, 2, 5, 19, 13, 0, 10);
//$e=19;
//foreach($arr as $value) {
//  if($e>1&&$e<5) {
//      echo "Yes";
//  }else{
//       echo "No";
//    }
//   break;
//}
/*15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2, 5, 19, 13, 0, 10.*/
// $arr=array(4, 2, 5, 19, 13, 0, 10);
// $count=0;
// foreach($arr as $value){
// $count++;
// }
// echo $count;
/*16.Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, как показано на картинке.
      1, 2, 3
      4, 5, 6
      7, 8, 9 */

//       $arr=array(1, 2, 3, 4, 5, 6, 7, 8, 9);


//     foreach ($arr as $elem) {


//   echo $elem;

// if($elem==3||$elem==6)
// {

//     echo "<br>";

// continue;    //всего лишь один шаг,видя прыгает
// }


// if($elem>=1&&$elem<=8)
// {
//   echo ",";
// }
//    }

/* 17.	Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.
 */
//$arr=array('Jan','Feb','March','April','May','June','July','August','Sept','October','November','Decem');
//$month=2;
//foreach ($arr as $key=>$value)
//{
//if ($key==$month-1)
//{
//echo "<b>$value</b>";
//echo '<br>';
//}
//else
//{
//echo $value.'<br>';
//}
//}
/*18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.*/
//$arr=array('Mon','Tues','Wedn','Thurs','Frid','Saturd','Sund');
//$day=5;
//foreach ($arr as $key=>$value)
//{
//if($key==$day-1)
//{
//echo "<i>$value</i>";
//echo '<br>';
//}
//else
//{
//echo $value.'<br>';
//}
//}
/*19. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.
x
xx
xxx
xxxx
xxxxx

*/
//$str ='';
//for ($i=1;$i<=20;$i++){
// $str.= 'x';
//  if ($str=='xxxxxx') break;
//echo $str.'<br>';
//}

/*20. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.

1
22
333
4444
55555
*/
//$str='';
//for ($i=1;$i<=9;$i++){


//for ($a=0;$a<$i;$a++){


//if ($i>5&&$i<=9) break;
//$str.=$i;

//}
//echo $str.'<br>';
//$str='';
//$a=0;
//}
/*21. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx*/
//$str='';
//for ($i=1;$i<=10;$i+=2)
//{
//$str.='xx';
//echo $str.'<br>';
//}
/*22. (+1) Создайте массив, заполните его случайными значениями (можно использовать функцию rand, например $var  = rand(5, 15)), найдите максимальное и минимальное значение массива и поменяйте их местами.*/
//for($i = 0; $i < 15; $i++) {
//    $arr[] = rand(5,15);
//    if($i==0)
//    {
//        $min = $arr[$i];
//        $min_key = $i;
//        $max = $arr[$i];
//        $max_key = $i;
//    }
//    if($min>$arr[$i])
//    {
//        $min=$arr[$i];
//        $min_key = $i;
//    }
//    if($max<$arr[$i])
//    {
//        $max=$arr[$i];
//        $max_key=$i;
//    }
//}
//echo print_r($arr); echo "<br>";
//$arr[$max_key] = $min;
//$arr[$min_key] = $max;
//echo print_r($arr);
//echo "<br>Максимальное:".$max.";Минимальное:".$min.";";


/*23.  (+1) Создайте массив и заполните его случайными числами от 1 до 100 (rand). Выведите на экран элементы, значения которых больше нуля и у которых не парный индекс.
Также вычислите произведение тех элементов, значения которых больше нуля и у которых парные индексы (парное число - это число, кратное 2), результат выведите на экран.
*/
//$result=1;
//for($i=0; $i<100; $i++) {
//    $arr[] = rand(1, 100);
//}
//    print_r($arr);
//echo '<br>';
//    foreach ($arr as $value) {
//        if ($value % 2 && $value > 0) {
//            echo "это нечетное число : " . $value . '<br>';
//        }
//        if ($value % 2 == 0 && $value > 0) {
//            $result*= $value;
//
//            echo "Это произведение : " . $result . '<br>';
//        }
//    }


/*24.Дана строка ‘123456789’. С помощью цикла и дополнительной переменной разверните строку так, чтобы в итоге получилось ‘987654321’. Результат выводить после окончания цикла, но не внутри.
$count*/

//$str='123456789';
//$x='';
//$count=$x;
//
//for($i=strlen($str);$i--;)
//{
//    $str.=$x;
//    $count[]=$str[$i];
//}
//
//foreach ($count as $value)
//{
//    echo $value;
//}



?>