<?php
	session_start();

    include 'global-var.php';
    if($_SESSION['user']->{'role'} == 1){
        if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['info']) && isset($_POST['role'])  && isset($_POST['filename'])){

            $fn = '../users/'.$_POST['filename'];

            file_put_contents($fn, '{'.PHP_EOL, FILE_APPEND | LOCK_EX);
            file_put_contents($fn, '"login": "'.$_POST['login'].'",'.PHP_EOL, FILE_APPEND | LOCK_EX);
            file_put_contents($fn, '"password": "'.$_POST['password'].'",'.PHP_EOL, FILE_APPEND | LOCK_EX);
            file_put_contents($fn, '"info": "'.$_POST['info'].'",'.PHP_EOL, FILE_APPEND | LOCK_EX);
            file_put_contents($fn, '"role": "'.$_POST['role'].'"'.PHP_EOL, FILE_APPEND | LOCK_EX);
            file_put_contents($fn, '}'.PHP_EOL, FILE_APPEND | LOCK_EX);

            header('Location: users-list.php');

        }else{
            echo 'Данные не полны <br>';
        }
    }
