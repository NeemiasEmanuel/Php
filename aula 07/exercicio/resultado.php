<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usurio</title>
    
</head>
<body>
    <header>
        <h1>Usuario cadastrado</h1>
    </header>
    
    <main>
        <?php 
        $base = $_GET['base'];
        $altura = $_GET['altura'];
        if(!empty($_GET['base']) && !empty($_GET['altura']))
        {  
            if($base > 0 && $altura > 0)
            {
            $perimetro = $base * 2 + $altura *2;
            $area = $base *$altura;
            echo "<p>o perimetro $perimetro e a area $area </p>";
            }
            else{
                echo "Dados incorretos";
            }
        }
        else{
            echo "Não foram preenchidos os campos do formulário";

        }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>

</body>
</html>