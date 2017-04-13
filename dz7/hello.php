<?php
$username=isset($_COOKIE['username'])? strip_tags(trim($_COOKIE['username'])) : '';
$phone=isset($_COOKIE['phone'])? strip_tags(trim($_COOKIE['phone'])) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>
    <a href="index.php">Go to index</a>
</p>
<?php
if(!empty($username)): ?>
    <p>Hello, <?php echo $username ?></p>
<?php endif; ?>
<div>
    <form action="" method="GET">
        <label>Username:
            <input type="text" name="username" <?php echo $username ?>" />
        </label>
    </div>
<div>
        <label>Phone:
            <input type="text" name="phone"  value="<?php echo $phone ?>" />
        </label>
</div>
        <input type="submit" value="Send">
    </form>

</body>
</html>
