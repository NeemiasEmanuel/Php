<?php 
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root', 'positivo');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        /*
        $pdo->exec("INSERT INTO teste.tabela
        (nomeUsu,estadoCivil,cpf,profissao)
        Values('Neemias','Casado',00345678911,'Programador')");    
        */
        /*$sqlQuery = $pdo->prepare("INSERT INTO teste.tabela
        (nomeUsu,estadoCivil,cpf,profissao)
        Values('Caio','solteiro',112378911,'Desempregado')");
        $sqlQuery->execute();*/

    } catch (PDOException $erro) {
        echo "ERRO => " . $erro->getMessage();
    }

?>
