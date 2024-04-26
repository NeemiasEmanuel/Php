<?php 
session_start();
/*
$_SESSION['usuario'] = "Professor";
echo "Essa pagina foi visualizada pelo {$_SESSION['usuario']}";
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessoes</title>
</head>
<body>
<?php 

    $_SESSION['aula'] = "Linguagem PHP";
    $_SESSION['data'] = date('d/m/y');
    $_SESSION['hora'] = time();
    echo '<br><a href="apresentacaoDados.php"> Clique para ir á pagina 02';
?>    

</body>
</html>