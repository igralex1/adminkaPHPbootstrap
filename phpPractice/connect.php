<?php
    $connection =  mysql_connect('localhost', 'root','1234')
        or die("Ошибка " . mysqli_error($connection ));
    $select_db = mysql_select_db('practice')or die('Не удалось выбрать базу данных');
?>