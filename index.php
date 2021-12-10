<?php
    //echo 'ola';

    //echo (time());

    $name = "myCookie";
    $value = rand(0,1000);
    

    //SÓ VAI CRIAR O COOKIE SE ELE NÃO EXISTIR
    if(!isset($_COOKIE[$name])){
        setcookie($name,strval($value), time() + 5); //86400); = 1 dia , valor em segundos da duração dos cookies
    }

    echo "FIM";
