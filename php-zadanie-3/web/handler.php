<?php
	//session_start();

    require_once 'common.php';

    $local_array_of_users = array(
        'user1' => array(
            'login' => 'user1',
            'password' => '123',
            'info' => 'User_1',
            'role' => 4
        ),
        'user2' => array(
            'login' => 'user2',
            'password' => '123',
            'info' => 'User_2',
            'role' => 4
        ),
        'user3' => array(
            'login' => 'user3',
            'password' => '123',
            'info' => 'User_3',
            'role' => 4
        ),
        'user4' => array(
            'login' => 'user4',
            'password' => '123',
            'info' => 'User_4',
            'role' => 4
        )
    );

	if (isset($_POST['login']) && isset($_POST['password'])) {
        if(array_key_exists($_POST['login'], $local_array_of_users)){
            if ($local_array_of_users[$_POST['login']]['password'] == $_POST['password']){
                $_SESSION['user'] = new userView((object)$local_array_of_users[$_POST['login']]);
                header('Location: info.php');
            }else{
                echo 'Invalid credentials'.'<br>';
            }
        }else{
            $file_array_of_users = userView::getUsersArray();
            if(array_key_exists($_POST['login'], $file_array_of_users)){
                $user = userProfile::userAuto($file_array_of_users[$_POST['login']]->{'login'},
                    $file_array_of_users[$_POST['login']]->{'password'});
                if($user != null){
                    unset($_SESSION['user']);
                    $_SESSION['user'] = $user;
                    header('Location: info.php');
                }else{
                    echo 'Invalid credentials <br>';
                    echo 'file do not opened <br>';
                }
            }else{
                echo 'login not found'.'<br>';
            }
        }

	} else {
		header('Location: index.php');
	}
