<?php 
    include_once('./conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<hearder>
        <nav>
            <ul>
                <a href="Listar.php">
                    <li>Listar</li>
                </a>
                <a href="cadastrar.php">
                    <li>Cadastrar</li>
                </a>
                <a href="excluir.php">
                    <li>Excluir</li>
                </a>
                <a href="editar.php">
                    <li>Editar</li>
                </a>
            </ul>
        </nav>
    </hearder>
    <h1>Listar</h1>

    <?php 
        $queryUsuario = "SELECT idUsuario,nomeUsuario,sobrenomeUsuario,email FROM usuario.tabelaUsuario";
        $result = $pdo->prepare($queryUsuario);
        $result->execute();
        
        if($result->rowCount() != 0)
        {
    ?>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($rowTable = $result->fetch(PDO::FETCH_ASSOC))
            {
            ?>
                <tr>
                    <td align="left"><?php echo $rowTable['idUsuario'] ?></td>

                    <td align="left"><?php echo $rowTable['nomeUsuario'] ?></td>

                    <td align="left"><?php echo $rowTable['sobrenomeUsuario'] ?></td>

                    <td align="left"><?php echo $rowTable['email'] ?></td>

                </tr>
            <?php }  ?>
        </tbody>
    </table>
<?php }
else{
    echo "<p style='color: red'>ERRO:Não existem registros a serem listados </p> <br>";
}

?>


</body>
</html>