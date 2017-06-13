<?php
	session_start();

    include 'global-var.php';
/*
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['info'] = $_POST['info'];
*/
    $_SESSION['user']->{'login'} = $_POST['login'];
    $_SESSION['user']->{'info'} = $_POST['info'];

    header('Location: info.php');

