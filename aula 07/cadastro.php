<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usurio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Usuario cadastrado</h1>
    </header>
    
    <main>
        <?php 
        $nome = $_GET['nome'];
        $sobrenome = $_GET['sobrenome'];
        if(!empty($_GET['nome']))
        {  
        echo "<p>Bem vindo ao site $nome $sobrenome! </p>";
        }
        else{
            echo "Não foram preenchidos os campos do formulário";
        }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>

</body>
</html>