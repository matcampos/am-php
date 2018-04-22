<?php
    $conection = MYSQLI_CONNECT('localhost','root','','rolez');
                if(!$conection){
                    echo "Erro ao se conectar" . mysqli_error($conection);
                }   
?>