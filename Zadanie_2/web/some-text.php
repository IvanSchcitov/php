<?php
    session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
    <?php
        if(isset($_SESSION['user']->{'login'})){
            echo '<p>Напоминаю, что ты пользователь: ';
            echo $_SESSION['user']->{'login'};
            echo '<h1>Текст Рыба</h1>';
    ?>
             <p>Задача организации, в особенности же постоянный количественный рост и сфера нашей активности требуют определения и уточнения новых предложений. Таким образом начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации систем массового участия. С другой стороны консультация с широким активом требуют от нас анализа направлений прогрессивного развития. Равным образом начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке систем массового участия. С другой стороны консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач. Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке форм развития.

             <p>Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности представляет собой интересный эксперимент проверки системы обучения кадров, соответствует насущным потребностям. Не следует, однако забывать, что консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании существенных финансовых и административных условий. Таким образом постоянный количественный рост и сфера нашей активности требуют определения и уточнения новых предложений.

             <p>Товарищи! дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации новых предложений. Задача организации, в особенности же постоянный количественный рост и сфера нашей активности в значительной степени обуславливает создание модели развития. Повседневная практика показывает, что рамки и место обучения кадров играет важную роль в формировании систем массового участия. Таким образом начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач. С другой стороны сложившаяся структура организации обеспечивает широкому кругу (специалистов) участие в формировании форм развития. С другой стороны реализация намеченных плановых заданий в значительной степени обуславливает создание дальнейших направлений развития.
    <?php
            echo '</p>';
            echo '<a href="info.php">К профилю   </a>';
            echo '<a href="destroy-session.php">Выйти</a>';
        }else{
            echo 'Кто ты? я тебя не знаю';
            echo '<a href="index.php">Авторизация</a>';
        }

    ?>

</body>
</html>
