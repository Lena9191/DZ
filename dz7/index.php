<?php
include_once 'functions.php';
$userBirthday = 0;
if (!empty($_GET)) {
    $username = strip_tags(trim($_GET['username']));
    $phone = $_GET['phone'];
    $birthday = $_GET['birthday'];
    
    /*1.Сделайте две страницы: index.php и hello.php и свяжите их ссылками друг на
друга. При заходе на index.php с помощью формы
<form ​action ​="" ​method ​=" ​GET ​">
​<input ​type ​=" ​text ​" ​name ​=" ​username ​">
​<input ​type ​=" ​submit ​">
</form>
спросите у пользователя его имя и запишите в куки. При заходе на hello.php
поприветствуйте пользователя фразой “Hello, %Name%!”.*/
    
    if (empty($username)) {
        echo 'Enter username value';
    } else {
        setcookie('username', $username, time() + 3600);
    }
    
    if (empty($phone)) {
        echo 'Enter phone value';
    } else {
        
        my_set_cookie('phone', $phone, time() + 3600);
    }
    
    /*2. Спросите у пользователя телефон с помощью формы. Затем сделайте так,
чтобы ​ в другой форме на другой странице ​ (поля: имя, фамилия, телефон)
при ее открытии поле телефон было автоматически заполнено.
<form ​action ​="" ​method ​=" ​GET ​">
​<input ​type ​=" ​text ​" ​name ​=" ​phone ​">
​<input ​type ​=" ​submit ​">
</form>
    */
    
    if (!empty($birthday)) {
        $birthday = strtotime($birthday);
        $month = date('m', $birthday);
        $day = date('d', $birthday);
        
        $userBirthdayTs = mktime(0, 0, 0, $month, $day);
        $today = time();
        $userBirthday = $today - $userBirthdayTs;
        if ($userBirthday < 0) {
            $userBirthday *= -1;
        }
        $userBirthday = floor($userBirthday / 3600) / 24;
        
    }
}

setcookie('age', mt_rand(10, 70), (time() + 3600 * 3));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>
    <a href="hello.php">Go to hello</a>
</p>
<p> Till your birthday <?php echo $userBirthday ?> is left </p>
</body>
<div>
    <form action="index.php" method="GET">
        <div>
            <label>Username:
                <input type="text" name="username">
            </label>
        </div>
        <div><label>Phone:
                <input type="text" name="phone" maxlength="5">
            </label></div>
        <div><label>birthday
                <input type="text" name="birthday">
            </label></div>
        <input type="submit" value="Send">
    </form>
</div>
</body>
</html>
