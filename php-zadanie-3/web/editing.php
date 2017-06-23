<?php
    //session_start();

    require_once 'common.php';
?>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<p><?php
    if(isset($_SESSION['user']->{'login'})){
        echo "Вы авторизованы как пользователь: ".$_SESSION['user']->{'login'};
        ?>
        <form method="POST" action="edit-data.php">
            <label>Логин:</label>
            <input type="text" name="login">

            <br />
            <br />
            <label>Информаация о себе:</label>
            <input type="text" name="info">

            <button type="submit">  Редактировать</button>
        </form>
    <?php
    }?>

<a href="destroy-session.php">Выйти</a>

</body>
</html>
