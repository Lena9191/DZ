<?php

/*
Создаю переменную $a и присваиваю ей значение 3. Вывожу значение этой переменной на экран.
*/

// $a=3;
// echo $a;
// --------------------------
/*
Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).
*/
//$a=10;
//$b=2;
//$c=$a+$b;
//$x=$a-$b;
//$y=$a*$b;
//$z=$a/$b;
//echo "$c";
//echo "<br>";
//echo "$x";
//echo "<br>";
//echo "$y";
//echo "<br>";
//echo "$z";
// --------------------------
/*
Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат присвойте переменной $result. Выведите на экран значение переменной $result.
*/
//$c=15;
//$d=2;
//$result=$c+$d;

//echo " $result";
// --------------------------
/*Создайте переменные $a=10, $b=2 и $c=5. Выведите на экран их сумму.
*/
//$a=10;
//$b=2;
//$c=5;
//$d=$a+$b+$c;
//echo  $d;
// --------------------------
/*Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $с. Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные. Выведите результат на экран.
*/
//$a=17;
//$b=10;
//$c=$a-$b;
//$d=&$c;
//$e=$c+$d;
//echo $e;
// --------------------------
/* Создайте переменную $text и присвойте ей значение 'Привет, Мир!'. Выведите значение этой переменной на экран.
*/
//$text="'Hello, world!'";
//echo "$text";
// --------------------------
/* Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих переменных и операции сложения строк выведите на экран фразу Привет, Мир!'.

p.s. под результатом сложения подразумевается возможность конкатенации строк с помощью знака +. Например:

$var = “Hello” + “ world!”; // в переменной $var будет Hello world

Это альтернатива следующему выражению:

$var = “Hello” . “ world”; // в переменной $var будет Hello world
*/
//$text1='Hello';
//$text2='world';
//$var= "Hello" . " world!";
//echo $var;
// --------------------------
/*Создайте переменную $text и присвойте ей значение 'I love heavy metal!'. Выведите символы: o,y,t,l ! всеми возможными способами.
*/
//$text="I love heavy metal";
//$str="$text";
//$first=$str{0};
//$third=$str{2};
//$forth=$str{3};
//$fifth=$str{4};
//$last=$str{strlen($str)-1};
//echo $first;
//echo "<br>";
//echo $third;
//echo "<br>";
//echo $forth;
//echo "<br>";
//echo $fifth;
//echo "<br>";
//echo $last;
// --------------------------
/*Создайте переменную $game и присвойте ей значение 'Путешественник'. Обращаясь с этим словом как с отдельными символами составьте различные русские слова.
*/
//$game="Traveller";
//$str="$game";
//$first=$str{0};
//$second=$str{1};
//$third=$str{2};
//$forth=$str{3};
//$fifth=$str{4};
//$sixth=$str{5};
//$seventh=$str{6};
//$eighth=$str{7};
//echo "$first","$second","$third","$forth","$fifth","$sixth";
//echo "<br>";
//echo "$first"."$eighth"."$sixth"."$seventh";
// --------------------------
/*Создайте переменную, присвойте ей число. Возведите это число в квадрат. Выведите его на экран
*/
//$a=5;
//$b=2;
//$c=$a**$b;
//echo "$c"
// --------------------------

/*Переделайте этот код так, чтобы в нем использовалась только одна переменная $var. Количество строк кода при этом не должно измениться.


$var = 3;

$var1 = $var + 5;

$var2 = $var1 * 10;

echo $var;
*/


//$var=3;
//$var=$var+5;
//$var=$var*10;
//echo $var;
// --------------------------

/*11. Определите тип следующих переменных с помощью функции gettype().

Например:echo gettype($var)*/

//$var1=array('joomla','wordpress','drupal');
//echo gettype($var1);
//echo "<br>";
//$var2='привет!';
//echo gettype($var2);
//echo "<br>";
//$var3=23;
//echo gettype($var3);
//echo "<br>";
//$var4='23';
//echo gettype($var4);
//echo "<br>";
//$var5=true;
//echo gettype($var5);
//echo "<br>";
//$var6='true';
//echo gettype($var6);
//$var7=2.5;
//echo gettype($var7);
//echo "<br>";
//$var8=null;
//echo gettype($var8);
// --------------------------
//if-else
/*Создайте переменную $а и присвойте ей ноль. Создайте конструкцию if-else с условием если переменная $a равна нулю, то выведите 'Верно!', иначе выведите 'Неверно!'. Проверьте работу скрипта при $a, равном 1, -3*/
//$a=0;
//if ($a==1){

//echo "Верно";
//}
//else{
//echo "Неверно";
//}
// --------------------------

/*Создайте переменную $а и присвойте ей ноль. Создайте конструкцию if-else с условием если переменная $a больше нуля, то выведите 'Верно!', иначе выведите 'Неверно!'. Проверьте работу скрипта при $a, равном 1, -3.*/
//$a=-3;
//if ($a>0){

//	echo "Верно";
//}
//else{
//	echo "Неверно";
//}
// --------------------------
/*Создайте переменную $а и присвойте ей ноль. Создайте конструкцию if-else с условием если переменная $a меньше нуля, то выведите 'Верно!', иначе выведите 'Неверно!'. Проверьте работу скрипта при $a, равном 1, -3.*/
//$a=1;
//if ($a<0){
//	echo "Верно";
//}
//else{
//	echo "Неверно";
//}
// --------------------------
/*Создайте переменную $а и присвойте ей ноль. Создайте конструкцию if-else с условием если переменная $a больше или равна нулю, то выведите 'Верно!', иначе выведите 'Неверно!'. Проверьте работу скрипта при $a, равном 1, -3.*/
//$a=-3;
//if ($a>=0){
//	echo "Верно";
//}
//else{
//	echo "Неверно";
//}
// --------------------------
/*5. Создайте переменную $а и присвойте ей ноль. Создайте конструкцию if-else с условием если переменная $a меньше или равна нулю, то выведите 'Верно!', иначе выведите 'Неверно!'. Проверьте работу скрипта при $a, равном 1, -3.*/
//$a=-3;
//if ($a<=0){
//	echo "Верно";
//}
//else
//	{
//echo "Неверно";
//}
// --------------------------
/*6. Создайте переменную $а и присвойте ей ноль. Создайте конструкцию if-else с условием если переменная $a не равна нулю, то выведите 'Верно!', иначе выведите 'Неверно!'. Проверьте работу скрипта при $a, равном 1, -3.*/
//$a=-3;
//if ($a!=0){
//	echo "Верно";
//}
//else
//	{
//		echo "Неверно";
//}
// --------------------------
/*7. Создайте переменную $а и присвойте ей ноль. Создайте конструкцию if-else с условием если переменная $a равна 'test', то выведите 'Верно!', иначе выведите 'Неверно!'. Проверьте работу скрипта при $a, равном 'test', 'тест', 3.*/
//$a=3;
//if ($a=='test'){
//	echo "Верно";
//}
//else
//{
//echo "Неверно";
//}
// --------------------------
/*Создайте переменную $а и присвойте ей ноль. Создайте конструкцию if-else с условием если переменная $a равна '1' и по значению и по типу, то выведите 'Верно!', иначе выведите 'Неверно!'. Проверьте работу скрипта при $a, равном '1', 1, 3.*/
//$a='1';
//if ($a==='1'){
//	echo "Верно";
//}
//else
//{
//echo "Неверно";
//}
// --------------------------
/*Если переменная $a пустая, то выведите 'Верно!', иначе выведите 'Неверно!'. Проверьте работу скрипта при $a, равном 1, 0, -3, null, true, ''*/
//$number=true;
//if (empty($number)){
//	echo "True";
//}
//else
//{
//	echo "False";
//}
// --------------------------
/*Если переменная $a НЕ пустая, то выведите 'Верно!', иначе выведите 'Неверно!'. Проверьте работу скрипта при $a, равном 1, 0, -3, null, true, ''.*/
//$number=true;
//if (!empty($number)){
//	echo "True";
//}
//else
//{
//	echo "False";
//}
// --------------------------
/*11. Если переменная $a существует, то выведите 'Верно!', иначе выведите 'Неверно!'. Проверьте работу скрипта при $a, равном 1, 0, -3, null, true, ''.*/
//$a=true;
//if (isset($a)){
//	echo "True";
//}
//else
//{
//	echo "False";
//}
/*Если переменная $a НЕ существует, то выведите 'Верно!', иначе выведите 'Неверно!'. Проверьте работу скрипта при $a, равном 1, 0, -3, null, true, ''.*/
//$a=true;
//if(!isset($a)){
//	echo "True";
//}
//else
//{
//	echo "False";
//}
// --------------------------
/*13. Еgсли переменная $var равна true, то выведите 'Верно!', иначе выведите 'Неверно!'. Проверьте работу скрипта при $var, равном true, false. Напишите два варианта скрипта — с короткой записью и с длинной.*/
//$var ='false';
//echo ($var =="true") ? "true":"false";


//$var = true;
//if ($var == true && $var == true) {
//   echo "true";
//}

//else
//{

//	echo "false";
//}
// --------------------------
/*14. Если переменная $test не равна true, то выведите 'Верно!', иначе выведите 'Неверно!'. Проверьте работу скрипта при $test, равном true, false. Напишите два варианта скрипта — с короткой записью и с длинной*/
//$test= true;
//echo ($test!=="true") ? "true":"false";

//$test=false;
//if ($test!== true && $test !== true){
//echo "true";
//}
//else
//{
//	echo "false";
//}
// --------------------------
/*15. Если переменная $a больше нуля и меньше 5-ти, то выведите 'Верно!', иначе выведите 'Неверно!'. Проверьте работу скрипта при $a, равном 5, 0, -3, 2./*/
//$a=2;
//if ($a<5&&$a>0){
//	echo "true";
//}
//elseif($a>5&&a<0){
//	echo "true";
//}
//else
//{
//	echo "false";
//}
// --------------------------
/*Если переменная $a равна нулю или равна двум, то поделите ее на 10, иначе прибавьте к ней 7 и выведите ее на экран. Проверьте работу скрипта при $a, равном 5, 0, -3, 2.*/
//$a=0;
//if ($a==0||$a==2){
//	$a=$a/10;
//	echo "$a";
//}
//elseif($a>0&&$a<2){
//	$a=$a+7;
//	echo "$a";
//}
//else
//{
//echo "false";
//}
// --------------------------
/*17. Если переменная $a не равна 1 или не равна 3, то выведите 'Верно!', иначе выведите 'Неверно!'. Проверьте работу скрипта при $a, равном 1, 0, 3, 2.*/
//$a=3;
//if ($a!==1&&$a!==3){
//	echo "true";
//}
//else
//{
//	echo "false";
//}
// --------------------------
/*18. Если переменная $a равна или меньше 1, а переменная $b больше или равна 3, то выведите сумму этих переменных, иначе выведите 'Неверно!'. Проверьте работу скрипта при $a и $b, равном 1 и 3, 0 и 6, 3 и 5.*/
//$a=0;
//$b=6;
//if ($a<=1&&$b>=3){
//$c=$a+$b;
//echo "$c";
//}
//else
//{
//	echo "false";
//}
// --------------------------
/*Если переменная $a больше нуля и меньше 5-ти, то увеличьте $a на 1, иначе прибавьте к $a число 5. Выведите новое значение переменной на экран. Проверьте работу скрипта при $a, равном 5, 0, -3, 9.*/
//$a=9;
//if ($a>0&&$a<5){
//	$c=$a+1;
//	echo "$c";
//}
//else
//{
//	$d=$a+5;

//	echo "$d";
//}
// --------------------------
/*Если переменная $a больше 2-х и меньше 11-ти, или переменная $b больше или равна 6-х и меньше 14-ти, то увеличьте $a на 2, иначе прибавьте к $a число 5. Выведите новое значение переменной на экран. Проверьте работу скрипта самостоятельно.*/
//$a=3;
//$b=10;
//if ($a>2&&$a<11||$b>6&&$b<14){
//	$d=$a*2;
//	echo "$d";
//}
//else
//{
//$c=$a+5;
//echo "$c";
//}
// --------------------------
/*Переменная $lang может принимать два значения: 'ru' и 'en'. Если она имеет значение 'ru', то в переменную $arr запишем массив дней недели на русском языке, а если имеет значение 'en' – то на английском.*/
//$lang="ru";
//if ($lang=="en"){
//	$arr=array ("Mon", "Tues", "Wed", "Thurs", "Fri", "Saturd", "Sund");
//print_r($arr);
//}
//else
//{

//	$arr=array ("Пон", "Втор", "Среда", "Четв", "Пятница", "Суб", "Воскр");
//	print_r($arr);
//}

/*22. Создайте конструкцию с помощью switch/case состоящую из проверок названий месяцев. Каждый case - это месяц года, при выполнении которого должно отобразится название месяца. Создайте переменную, значение которой будет названием одного из месяцев. Передайте эту переменную в конструкцию switch/case и убедитесь, что выполнилась правильная проверка.*/
//$month="January";
//switch ($month) {
//	case 'January':
//	echo "January";
//	break;
//	case 'February':
//	echo "February";
//	break;
//	case 'March':
//	echo "March";
//	break;
//	case 'April':
//	echo "April";
//	break;
//	case 'May':
//	echo "May";
//	break;
//	case 'June':
//	echo "June";
//	break;
//	case 'July':
//	echo "July";
//	break;
//	case 'August':
//	echo "August";
//	break;
//	case 'September':
//	echo "September";
//	break;
//	case 'October';
//	echo "October";
//	break;
//	case 'November';
//	echo "November";
//	break;
//	case 'December':
//	echo "December";
//	}
/*В переменной $day лежит число от 1 до 31. Определите в какую декаду месяца попадает это число (в первую, вторую или третью)*/
//$day=26;
//switch ($day){
//	case ($day>=1&&$day<11):
//echo "The first decade";
//break;
//case ($day>10&&$day<21):
//echo "The second decade";
//break;
//case ($day>19&&$day<32):
//echo "The third decade";
//}
/*В переменной $month лежит число от 1 до 12. Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).*/
//$month=12;
//Switch ($month){
//	case ($month>=1&&$month<3);
//	echo "Winter";
//	break;
//	case ($month>=3&&$month<6);
//	echo "Spring";
//	break;
//	case ($month>=6&&$month<9);
//	echo "Summer";
//	break;
//	case ($month>=9&&$month<=11);
//	echo "Autumn";
//	case ($month==12);
//	echo "Winter";
//}
?>
