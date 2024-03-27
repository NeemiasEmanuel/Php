<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
  <?php 
  
    print "Hello World! <br>"; 
    echo "Hello World!";

     echo "Hello World! <br>";
    $varprint = print "Hello World! <br>"; 

    echo $varprint;
    
    //$%var01 = "Errada";
    
    //$01var = "Errada";

    $var01 = "Correto";

    echo $var01;

    $_var_01 = "Coreto";

    echo $_var_01;
    echo $var01 = "cooreto";
    $var01 = "correto";
    echo $var01;

    $varInt = 52;
    echo gettype($varInt);
    ?>
    <br> <br>
    <?php
    $varDouble = 1000.52;
    echo gettype($varDouble);
    ?>
    <br> <br>
    <?php
     $varBoolean = true;
     echo gettype($varBoolean);
     ?>
     <br> <br>
     <?php
    $varVetor = array(1,2,3,4,5,6,7,8,9,32);
    echo gettype($varVetor);
    ?>
    <br> <br>
    <?php
    $nome = "Carlos";
    $sobrenome = "Almeida";

    echo "Muito prazer, $nome $sobrenome";
    ?>
    <br> <br>
    <?php
    $nome = "Felipe";
    echo "Muito prazer, $nome $sobrenome";
    


  $var_00 = "Evoluindo: ";
  $var_01 = $var_00."no reconhecimento de variáveis <br>";
  echo $var_01;//RETORNO DE VARIAVEIS CONCATENADOS
   

    //Operadores arrentimeticos
    $var03 = 2;
    $var04 = 7;
    $var05 = "11.32";
    echo ($var03 + $var04);
    ?>
    <br> <br>
    <?php
    echo $var03 + $var04;
    ?>
    <br> <br>
    <?php
    echo $var04**$var03;
    ?>
    <br> <br>
    <?php
    echo pow($var04, $var03);
    ?>
    <br> <br>
    <?php
    echo $var04%$var03;
    ?>
    <br> <br>
    <?php
    echo $var05 - $var03;
    ?>
    <br> <br>
    <?php
    //Operadores de atribuição
    echo $var03+=$var04;

    ?>
    <br> 
    <?php
    //Casting - Conversao de numeros
    echo "<br>".gettype($var03)."<br>";
    echo "<br>".gettype($var05);
    ?>
    <br> 
    <?php
    $var06 = (float)$var05;
    echo "<br>".gettype($var06);

    $varTeste_01 = 33;
    var_dump($varTeste_01);
    ?>
    <br> 
    <?php
    $vetorTeste = array("JAVA","PYTHON", "JAVASCRIPT");
    echo $vetorTeste;
    var_dump($vetorTeste);
    ?>
    <br> 
    <?php
    
    $linguagens = array(
        array("PHP", "PHP: HyperText PreProcessor"),
        array("SQL", "Structured Query Language")
    );
    var_dump($linguagens[1][1]);

    

    ?>
</body>
</html>