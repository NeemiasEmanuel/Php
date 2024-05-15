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
        <h1>EX 2</h1>
    </header>
    
    <main>
        <?php 

        /* 
        ex3
        $valor1 = $_GET['valor1'];
        $valor2 = $_GET['valor2'];
        $soma = $valor1 + $valor2;
        if($soma < 0){
            echo " 0 ";
        }
        else{
            echo "$soma";
        }


        
        //ex2
        $valor1 = $_GET['valor1'];
        $fatorial = 1;
        for ($i=1; $i <= $valor1 ; $i++) { 
            $fatorial *= $i;
        }
        echo "!$valor1 = $fatorial";

        //ex1
        $nome = $_GET['nome'];
        $nota1 = $_GET['nota1'];        
        $nota2 = $_GET['nota2'];
        $nota3 = $_GET['nota3'];
        $nota4 = $_GET['nota4'];

        $media = ($nota1 + $nota2 + $nota3 +$nota4)/4;

        if($media >= 70){
            print("$nome foi aprovado com uma media $media!");
        }
        else if($media >= 30){

            print("$nome está de recuperação com uma media $media!");
        }
        else{
            print("$nome foi reprovado");
        }
*/
        $valor1 = $_GET['valor1'];
        $numerosdivisiveis = 0;

        $vetor = array();
        for ($i = 1; $i <= $valor1; $i++) { 
        if($valor1 % $i == 0){
            $numerosdivisiveis++;
            $vetor[$i]= $i;
        }
        }
        echo "O valor $valor1 é multiplo de:";
        foreach ($vetor as  $value) {
            echo "$value ";
        }

        echo "<br>O numero $valor1 é divisivel por $numerosdivisiveis numeros";
        
        
        if($numerosdivisiveis == 2){
            echo "<br> O numero $valor1 é primo";
        }
        else{
            echo "<br> O numero $valor1 não é primo";
        }

        ?>
    </main>

</body>
</html>