<?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $name = urldecode($name);
        $email = urldecode($email);
        $name = trim($name);
        $email = trim($email);
        (mail("komplect.sup.site@gmail.com", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email ,"From: ya.igorovchinnikoff@yandex.ru \r\n"));
        ?>