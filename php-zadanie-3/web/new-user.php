<?php
	//session_start();

    require_once 'common.php';

    if($_SESSION['user']->{'role'} == 1){
        if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['info']) && isset($_POST['role'])){

            $fn = '../users/'.mb_strtolower($_POST['login']).'.txt';

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
