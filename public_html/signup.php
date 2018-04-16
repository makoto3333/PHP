<?php

// 新規登録

require_once(__DIR__ . '/../config/config.php');

$app = new MyApp\Controller\SignUp();

 $app->run();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset=""utf-8">
    <title> </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="container">
        <form action="" method="post" id ="signup">
            <p>
                <input type="text" name="email" placeholder="email" value="<?= isset($app->getValues()->email) ? h($app->getValues()->email) : ''; ?>">
            </p>
            <p class="err"><?= h($app->getErrors('email')); ?></p>
            <p>
                <input type="password" name="password" placeholder="password">
            </p>
            <p class="err"><?= h($app->getErrors('password')); ?></p>
            <div class="btn" onclick="document.getElementById('signup').submit();">Sign Up</div>
            <p class="fs12"><a href="/login.php">Log IN</a></p>
            <input type="hidden" name="token" value="<?=h($_SETTION['token']);?>">
        </form>
    </div>
</body>
</html>

