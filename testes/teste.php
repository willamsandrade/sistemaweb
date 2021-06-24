<?php

    require_once '../classes/DAO/Conexao.class.php';//Anexar o arquivo Conexão
    require_once '../classes/entidades/Tipo.class.php';//Anexar o arquivo Tipo

    $Tipo = new Tipo(); //Instância do Objeto / Criar Objeto

    $Tipo->setIdTipo("1");
    $Tipo->setDescTipo('Administrador'); //Enviando Uma informação
    $Tipo->setObsTipo('Acesso ilimitado'); //Enviando Uma informação

    echo"Testes na classe Tipo<br>";
    echo"<hr>";
    echo"Acessando e Recuperando dados com os métodos set e get<br>"; 

    echo "<strong>Descrição do Tipo: </strong>" . $Tipo->getIdTipo() . "<br>"; //Recuperando Uma informação
    echo "<strong>Descrição do Tipo: </strong>" . $Tipo->getDescTipo() . "<br>"; //Recuperando Uma informação
    echo "<strong>Observação do Tipo: </strong>" . $Tipo->getObsTipo(); //Recuperando Uma informação

    

