<?php

    $tema = 'lightMode.css';//tema por defeito
    if (isset($_COOKIE['tema'])){
        $tema = $_COOKIE['tema'];
    }

    $dados = array(
        'name' => 'Hugão',
        'surname' => 'Resende',
        'age' => 33
    );

    setcookie('dados', json_encode( $dados,128), time() + 10000);

    $dados = json_decode( $_COOKIE['dados'] , 128);
    //setcookie('dados','',time()-1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "./assets/css/<?php echo $tema ?>" >
    <title>Cookies B</title>
</head>
<body>

    <div>
        <?php
             echo '<pre>';
             print_r ($dados);
             echo "Olá Sr.". $dados['surname']." ".$dados['name']. " com os seus ".$dados['age']." anos de idade";
        ?>
    </div>

    <h1>Olá Mundo</h1>
    <a href="lightMode.php"> LIGHT MODE </a> | <a href="darkMode.php"> DARK MODE </a>
    
</body>
</html>