<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];


    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $tel = htmlspecialchars($tel);

    $name = urldecode($name);
    $email = urldecode($email);
    $tel = urldecode($tel);

    $name = trim($name);
    $email = trim($email);
    $tel = trim($tel);


    if (mail("Varazdat2001za@gmail.ru",
              "Новое письмо с сайта",
              "Имя: ".$name."\n".
              "Email: ".$email."\n".
              "Телефон: ".$tel,
              "From: no-reply@mydomain.ru \r\n")
    ){
      echo ('Письмо успешно отправленно');
    }

    else {
      echo ('Есть ошибки');
    }

 ?>


//smtp.gmail.com
