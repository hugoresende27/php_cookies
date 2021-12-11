<?php
                                    
    setcookie('tema','darkMode.css', time()+ (1 * 364 *24 *60 *60));
    header('location: index.php');