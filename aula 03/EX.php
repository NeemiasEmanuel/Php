<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*4. Desenvolva um código em PHP que apresenta a multiplicação de 1 até 10. Tal código deve ser 
    desenvolvido
    com as estruturas de repetição WHILE, DO-WHILE, FOR e FOREACH.*/
    
    $mult = 1;
    $i = 1;
    while($i <= 10)
    {
        $mult =  $mult * $i;
        $i++;
    }
    echo "em while ". $mult;
    echo "<br><br>";
    
    $mult = 1;
    $i = 1;
    do{
    $mult =  $mult * $i;
    $i++;
    }while($i <= 9);
    
    echo "em do-while ". $mult;
    echo "<br><br>";
    $mult = 1;
    for ($i = 1; $i <= 10; $i++) { 
        $mult =  $mult * $i;
    }
    echo "em for ". $mult;
    echo "<br><br>";
    $multV= array(1,2,3,4,5,6,7,8,9,10);
    $mult = 1;
    foreach($multV as $value) {
       $mult *= $value;
    }
    
    echo "em foreach ". $mult;
    echo "<br><br>";

    /*5. Desenvolva um código que solicite dois números e calcule o primeiro número elevado ao segundo número.
    Primeiramente utilize as funções de exponenciação disponíveis na linguagem PHP. Em um segundo momento,
    calcule a exponenciação através de estruturas de repetição (FOR, WHILE e DO-WHILE).
    • Por exemplo:
    5^4 = 5 x 5 x 5 x 5 */
    $numero = 5;
    $expoente = 2;
    
    echo "em php ".($numero ** $expoente);
    echo "<br><br>";
    
    $resultado = 1;
    for ($i=0; $i < $expoente; $i++) { 
        $resultado *= $numero;
    }    
    
    echo "em for ". $resultado;
    echo "<br><br>";

    $resultado = 1;
    $i = 0;

    while($i < $expoente){
        $resultado *= $numero;
        $i++;
    }
    echo "em while ". $resultado;
    echo "<br><br>";

    $resultado = 1;
    $i = 0;
    
    do{

    $resultado *= $numero;
    $i++;

    }while($i < $expoente);
   
    echo "em do_while ". $resultado;
    echo "<br><br>";

        ?>
 
</body>
</html>