<?php
    session_start();

    include 'global-var.php';
?>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<p><?php
    if($_SESSION['user']->{'role'} == 1){
        echo "Заполните поля: <br>";
        ?>
        <form method="POST" action="new-user.php">
            <label>Имя файла (нижний регистр с расширением .txt):</label><br />
            <input type="text" name="filename">
            <br />
            <br />
            <label>Логин:</label><br />
            <input type="text" name="login">
            <br /><br />
            <label>Пароль:</label><br />
            <input type="text" name="password">
            <br /><br />
            <label>Информаация о себе:</label><br />
            <input type="text" name="info">
            <br /><br />
            <label>Роль:</label><br />
            <input type="text" name="role"><br /><br />

            <button type="submit">  Создать</button>
        </form>
    <?php
    }?>

<a href="destroy-session.php">Выйти</a>

</body>
</html>
