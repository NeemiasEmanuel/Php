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
    <h1>Cadastrar</h1>
<?php

    $dados = filter_input_array(INPUT_GET,FILTER_DEFAULT);
    if(!empty($dados['cadastrarUsu']))
    {
        $queryUsu = "INSERT INTO teste.tabela(nomeUsu,estadoCivil,cpf,profissao)
        Values('".$dados['nome']."',
        '".$dados['estadoCivil']."',
        '".$dados['cpf']."',
        '".$dados['profissao']."')";


        $cadUsuario = $pdo->prepare($queryUsu);
        $cadUsuario->execute();

        
        //rowCount() = retorna o numero de linhas afetadas por um insert/update/delete
        if($cadUsuario->rowCount()){
            echo "<p style='color: green'> Usuario cadastrado com sucesso</p> <br>";
        }
        else{
            echo "<p style='red: green'>ERRO: Usuario não cadastrado </p> <br>";
        }
    }

?>

    <form name="cadastrarUsuario" method="GET" action="">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome completo"> <br><br>
        <label for="">Estado Civil:</label>
        <select name="estadoCivil" id="estadoCivil">
            <option value="opcao">Escolha uma opção</option>
            <option value="Casado">Casado</option>
            <option value="Solteiro">Solteiro</option>
            <option value="Não Informar">Não informar</option>
        </select> <br><br>
        <label>CPF:</label>
        <input type="text" name="cpf" id="cpf" placeholder="Informe seu CPF"> <br><br>

        <label>Profissão:</label>
        <input type="text" name="profissao" id="profissao" placeholder="Informe sua profissão"> <br><br>

        <input type="submit" value="cadastrar" name="cadastrarUsu">

    </form>

</body>
</html>