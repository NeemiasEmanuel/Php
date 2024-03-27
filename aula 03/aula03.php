<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /* $i = 1;
    while($i <= 15)
    {
        echo $i." ";
        $i++;
    }

    echo "<br><br>";

    $x = 15;
    do {
        echo "$x ";
        $x--;
    } while ($x >= 1);

    echo "<br><br>";

    for($y=1; $y <= 15 ; $y++) { 
        echo "$y ";
    }

    echo "<br><br>";
    $nomes = array("Guilherme", "Maria", "Joaquin", "Marcos");

    for ($z = 0 ; $z <= 3 ; $z++) { 
        $itens = $nomes[$z];
        echo $itens." ";
    }
    
    echo "<br><br>";
    //foreach - Forma 1:
        foreach($nomes as $nome)
        {
            echo $nome." ";
        }        
    echo "<br><br>";
    //foreach - Forma 2:
        $vetor = array("0exo", "1exo", "3exo", "4exo", "5exo","exo");
        foreach ($vetor as $index => $item ) {
            echo "o nome é $item no indice $index. <br>";
        }
 
        echo "<br><br>";

        //realize a soma de numeros de 1 a 10 utilizando as estruturas de repetição while, do-while, for e foreach
        $i = 0; 
        $soma = 0; 
        while($i <= 10)
        {
            $soma += $i;
            $i++;
        }
        echo "A soma feita em while: " .$soma;
        echo "<br><br>";
        $i = 0;
        $soma = 0; 
        do
        {
        $soma += $i;
        $i++;    
        }while($i <= 10);
        echo "A soma feita em do-while: " .$soma;
        echo "<br><br>";

        $soma = 0; 
        for ($i=0; $i <= 10; $i++) { 
            $soma += $i;
        }
        echo "A soma feita em for: " .$soma;
        echo "<br><br>";
      
        $soma1 = 0; 
        $vetor = array(1,2,3,4,5,6,7,8,9,10);
        foreach($vetor as $value) {
            $soma1 += $value;
        }
        echo "A soma feita em foreach: " .$soma1;
    
        echo "<br> <br>";
        $vetorM = array(10,10,10,10,10,10,10,10,10,10);
        $somaM = 0;
        foreach ($vetorM as $index => $valueM) {
            $somaM += $valueM;
        }
        $media = $somaM/10  ;
        echo $media. " tipo ". gettype($media);
        
        //Minha tentativa
        $cidades = array("Sao paulo", "Rio de janeiro", "Recife", "Manaus", "Goiania", "Florianopolis");
        $estado  = array("SP", "RJ", "PE", "AM", "GO", "SC");
        foreach ($cidades as $key => $cidade) {
            $key = $estado[$key]; 
            echo "A capital do estado $key é $cidade <br>";
        }
        echo "<br><br>";
        //resposta do professor
        $vetor = array("SP"=>"Sao paulo", "RJ" => "Rio de janeiro", "PE" => "Recife", "AM" => "Manaus", "GO" => "Goiania", "SC" => "Florianopolis" );
        foreach ($vetor as $estado => $capital) {
            print("A capital de $estado é $capital <br>");
        }
        

        $vetori = array(
            array(
                "nomePessoa"=> "Cinthia",
                "idade"=> "18",
                "peso"=> "62",
                "altura"=>"1.68",
            ),
            array(
                "nomePessoa"=> "Cinthia",
                "idade"=> "18",
                "peso"=> "62",
                "altura"=>"1.68",
            ),
        );
        echo $vetor[0][0];
    */




    
        ?>
 
</body>
</html>