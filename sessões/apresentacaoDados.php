<?php 
    session_start();
    //configura o fuso horario padrao utilizado por todas
    //as funções de data e hora
    date_default_timezone_set('America/Sao_Paulo');

    echo 'Agora estamos na página 02 <br><br>';
    echo "Hoje é dia {$_SESSION['data']}, são " . date('H:i:s', $_SESSION['hora']) . " Horas.Estamos na aula de ". $_SESSION['aula'] . "<br>";

?>