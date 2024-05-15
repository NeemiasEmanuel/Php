<?php 
    include_once('./conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
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
    <h1>Cadastrar</h1>

<?php
 
    $dados = filter_input_array(INPUT_GET,FILTER_DEFAULT);
    if(!empty($dados['cadastrarUsu']))
    {
        $empty_input= false;
        $dados = array_map('trim', $dados);
        if(in_array("", $dados)){
            $empty_input = true;
            echo "<p style='color: red'>ERRO:Existem campos em branco </p> <br>";
        }
        elseif(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)){
            $empty_input = true;
            echo "<p style='color: red'>ERRO:email informado nao e valido </p> <br>";
        }

        if($empty_input == false){
            $queryUsu = "INSERT INTO usuario.tabelaUsuario(nomeUsuario,sobrenomeUsuario,email)
            Values('".$dados['nome']."',
            '".$dados['sobrenome']."',
            '".$dados['email']."'
            )";
    
    
            $cadUsuario = $pdo->prepare($queryUsu);
            $cadUsuario->execute();
    
            
            //rowCount() = retorna o numero de linhas afetadas por um insert/update/delete
            if($cadUsuario->rowCount()){
                echo "<p style='color: green'> Usuario cadastrado com sucesso</p> <br>";
                unset($dados);
            }
            else{
                echo "<p style='color: green'>ERRO: Usuario não cadastrado </p> <br>";
            }
        }
    
    }

?>
    <form name="cadastrarUsuario" method="GET" action="">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome" value="<?php if(isset($dados['nome'])){echo $dados['nome'];} ?>"> <br><br>
        <label>Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" placeholder="sobremome"value="<?php if(isset($dados['sobrenome'])){echo $dados['sobrenome'];}?>"> <br><br>
        <label>email:</label>
        <input type="text" name="email" id="email" placeholder="Informe seu email"> <br><br>

        <input type="submit" value="cadastrar" name="cadastrarUsu">

    </form>

</body>
</html>