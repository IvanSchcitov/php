<?php    //session_start();    require_once 'common.php';?><html><head>    <meta charset="UTF-8"></head><body>    <h2>Данные пользователей</h2>    <?php        if($_SESSION['user']->{'role'} == 1){            $file = file_get_contents($_GET['fn'], FILE_USE_INCLUDE_PATH);            $user_name = json_decode($file);            echo 'Login: '.$user_name->{'login'}.'<br>';            echo 'Password: '.$user_name->{'password'}.'<br>';            echo 'info: '.$user_name->{'info'}.'<br>';            echo 'Role: '.$user_name->{'role'}.'<br>';        }    ?>    <a href="create-user.php">Создать пользователя  </a>    <a href="destroy-session.php">Выйти</a></body></html>