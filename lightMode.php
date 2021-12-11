<?php
                                    //1 ano = 1ano * 365dias * 24horas * 60minutos * 60segundos
    setcookie('tema','lightMode.css', time()+ (1 * 364 *24 *60 *60));
    header('location:index.php');