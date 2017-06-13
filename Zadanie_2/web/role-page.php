<?php
    session_start();

    include 'global-var.php';
?>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
    <?php
        echo 'Информация для польлзователя '.$_SESSION['user']->{'login'}.'<br>';
        echo 'Роль: '.$_SESSION['user']->{'role'}.'<br>';
        echo '<br>';
        if ($_SESSION['user']->{'role'} == 1){
            echo 'Мне нужно отсюда выйти. Мне нужно освободиться. Я знаю, что у Вас есть ключ, он — в Вашем мозгу. <br>';
            echo 'После разрушения Зиона я могу покинуть вас! Понимаете? <br>';
            echo 'Мне нужны коды. Я пытаюсь найти Зион, и Вы мне все по-хорошему расскажете или... умрете. <br>';
        }
        if ($_SESSION['user']->{'role'} == 2){
            echo 'Следуй за белым кроликом <br>';
        }
        if ($_SESSION['user']->{'role'} == 3){
            echo 'Знать путь и пройти его — не одно и тоже. <br>';
        }
        if ($_SESSION['user']->{'role'} == 4){
            echo 'Я не тот кто вам нужен, Избранный это всего лишь ещё один инструмент контроля. <br>';
        }
        echo '<br>';
        echo '<a href="info.php">К профилю   </a>';
        echo '<a href="destroy-session.php">Переавторизоваться</a>';

    ?>

</body>
</html>
