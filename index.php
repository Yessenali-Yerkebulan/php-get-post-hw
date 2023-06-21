<?php error_reporting(-1);?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name = $_POST['name']??'';
        $email = $_POST['email']??'';
    ?>
    <?php
        if(empty(trim($name)) && empty(trim($email))): ?>
    <?php if(!empty($_POST)): ?>
        <p>Поля обязательны</p>
    <?php endif; ?>
    <form action="index.php" method="post">
        <p>Name: <input type="text" name="name"></p>
        <p>E-mail: <input type="email" name="email"></p>
        
        <p><button type="submit" name="send_form">Send</button></p>
    </form>
</body>
</html>
<?php else: ?>
    <p>Name: <?= $_POST['name']?></p>
    <p>Email: <?= $_POST['email']?></p>
<?php endif;?>