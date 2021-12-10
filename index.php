<?php
    
    //echo (time());
    /*
    $name = "myCookie";
    $value = rand(0,1000);
    

    //SÓ VAI CRIAR O COOKIE SE ELE NÃO EXISTIR
    if(!isset($_COOKIE[$name])){
        setcookie($name,strval($value), time() + 5); //86400); = 1 dia , valor em segundos da duração dos cookies
    }

    echo "FIM";
    */

    if(!isset($_COOKIE['name'])){

        //pedir o nome
        
        echo 
            '<form method="POST" action= "index.php"> 
                <input type="text" name="txtNome"><br>
                <input type="submit" value="Guardar">           
            </form>';

        //guardar o nome numa cookie
    } else {
        //dar as boas vindas ao user da sessão anterior
    }
