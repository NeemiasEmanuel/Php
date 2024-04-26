<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
        <form action="inicial.php" method="post">
            <label for="Nome">Nome: </label>
            <input type="text" name="Nome" >
            <br>
            <label for="Sobrenome">Sobrenome: </label>
            <input type="text" name="Sobrenome" ><br>
            <label for="EstadoCivil">Estado Civil: </label>
            <input type="text" name="EstadoCivil" ><br>
            <label for="Formacao">Formacão: </label>
            <input type="text" name="Formacao"><br>
            
            
            <input type="submit" value="Enviar" name="Enviar">
        </form>
    </section>
    <?php 
    if(isset($_POST['Enviar'])){
    $_SESSION['Nome'] = $_POST['Nome'];
    $_SESSION['Sobrenome'] = $_POST['Sobrenome'];
    $_SESSION['EstadoCivil'] = $_POST['EstadoCivil'];   
    $_SESSION['Formacao'] = $_POST['Formacao'];
        
    echo '<br><a href="dadosUsuario.php"> Clique para ir á pagina 02';
    }

    
    ?>
</body>
</html>