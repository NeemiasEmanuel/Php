<?php 
session_start();
    echo "Nome: " . $_SESSION['Nome']. "<br>";
    
    echo "Sobrenome: " . $_SESSION['Sobrenome']. "<br>";
    
    echo "Estado Civil: " . $_SESSION['EstadoCivil']. "<br>";
    
    echo "Formacao: " . $_SESSION['Formacao']. "<br>";

?>
