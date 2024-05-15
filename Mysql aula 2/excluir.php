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
    <h1>Excluir</h1>
    <?php 
        $queryUsuario = "SELECT idUsuario,nomeUsuario,sobrenomeUsuario,email FROM usuario.tabelaUsuario";
        $result = $pdo->prepare($queryUsuario);
        $result->execute();
        if(!empty($_REQUEST['id'])){
            $id = $_REQUEST['id'];
            $queryUsuarioConsultaDelete = "SELECT * FROM usuario.tabelaUsuario where idUsuario = $id";
            $resultConsultaDelete = $pdo->prepare($queryUsuarioConsultaDelete);
            $resultConsultaDelete->execute();

            if($resultConsultaDelete->rowCount() > 0){
                $sqlDelete = "DELETE FROM usuario.tabelaUsuario WHERE idUsuario = $id";
                $resultDeletar = $pdo->prepare($sqlDelete);
                $resultDeletar->execute();
                header("Refresh:1");

            }
        }
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
                <th>Excluir</th>
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

                    <td align="left">
                        <a class= "btn-sm btn-danger" href="excluir.php?id=<?php echo $rowTable['idUsuario']?>">Excluir</a>
                    </td>
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