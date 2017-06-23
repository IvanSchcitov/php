<?php
    //session_start();
    require_once 'common.php';
?>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<h1>Войдите</h1>
<p>Пользователь: <?php
    if(isset($_SESSION['user']->{'login'})){
        echo $_SESSION['user']->{'login'};
        echo '<br><a href="editing.php">Редактировать  <br></a>';
        if(isset($_SESSION['user']->{'role'}) && $_SESSION['user']->{'role'} == 1){
            echo '<a href="users-list.php">Список пользователей  </a> <br>';
            echo '<a href="create-user.php">Создать пользователя  </a>';
        }
    }else{
        echo 'Не выполнен вход';
    }
    ?>
</p>

<form method="POST" action="handler.php">
    <label>Логин:</label>
    <input type="text" name="login">

    <label>Пароль:</label>
    <input type="password" name="password">

    <button type="submit">Отправить</button>
</form>

<a href="some-text.php">Почитать  </a>
<a href="destroy-session.php">Выйти</a>

</body>
</html>
