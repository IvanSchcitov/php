<?php
	session_start();

    include 'global-var.php';

	if (isset($_POST['login']) && isset($_POST['password'])) {
        $str_login = mb_strtolower($_POST['login']);
        $str_path = '../users/'.$str_login.'.txt';
        $file = file_get_contents($str_path, FILE_USE_INCLUDE_PATH);
        if($file == True){
            $_SESSION['user'] = json_decode($file);
            if($_SESSION['user']->{'password'} == $_POST['password']){
                header('Location: info.php');
            }else{
                echo 'Invalid credentials';
                unset($_SESSION['user']);
            }
        }else{
            echo 'Invalid credentials <br>';
            echo 'file do not opened';
        }
        /*
		if (isset($users[$_POST['login']]) && $users[$_POST['login']]['password'] == $_POST['password']) {
			$_SESSION['login'] = $_POST['login'];
			header('Location: info.php');
		} else {
			echo 'Invalid credentials';
		}*/
	} else {
		header('Location: index.php');
	}
