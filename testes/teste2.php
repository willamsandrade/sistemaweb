<?php
    require_once '../classes/DAO/Conexao.class.php';//Anexar o arquivo Conexão
    require_once '../classes/entidades/Usuario.class.php';//Anexar o arquivo Tipo

    $Usuario = new Usuario(); //Instância do Objeto / Criar Objeto

    $Usuario->setIdUser('1'); //Enviando Uma informação
    $Usuario->setNomeUser('Willams'); //Enviando Uma informação
    $Usuario->setSobreUser('Silva Andrade'); //Enviando Uma informação
    $Usuario->setEmailUser('wsa.juazeiro@gmail.com'); //Enviando Uma informação
    $Usuario->setSenhaUser('123456789'); //Enviando Uma informação
    $Usuario->setIdTipo("1"); //Enviando Uma informação

    echo"Testes na classe Usuário<br>";
    echo"<hr>";
    echo"Acessando e Recuperando dados com os métodos set e get<br>"; 

    echo "<strong>Id do Usuário: </strong>" . $Usuario->getIdUser() . "<br>"; //Recuperando Uma informação
    echo "<strong>Nome Usuário: </strong>" . $Usuario->getNomeUser() . "<br>"; //Recuperando Uma informação
    echo "<strong>Sobrenome Usuário: </strong>" . $Usuario->getNomeUser() . "<br>"; //Recuperando Uma informação
    echo "<strong>Email Usuário: </strong>" . $Usuario->getEmailUser() . "<br>"; //Recuperando Uma informação
    echo "<strong>Senha Usuário: </strong>" . $Usuario->getSenhaUser() . "<br>"; //Recuperando Uma informação
    echo "<strong>id Tipo: </strong>" . $Usuario->getIdTipo() . "<br>"; //Recuperando Uma informação