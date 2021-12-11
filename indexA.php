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

    if(!isset($_COOKIE['nome'])){

        //pedir o nome
        
        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            //se não aconteceu a submissão do form
            echo 
                '<form method="POST" action= "index.php"> 
                    <input type="text" name="txtNome"><br>
                    <input type="submit" value="Guardar">           
                </form>';

        
        } else {
            //aconteceu a submissão
            //buscar o nome
            //criar o cookie
            setcookie('nome',$_POST['txtNome'], time() + 25);
        }
    
    }else{
        
        //dar as boas vindas ao user da sessão anterior
        echo "Seja bem vindo ".$_COOKIE['nome']. "!!!";
    }      

    echo "terminado";
