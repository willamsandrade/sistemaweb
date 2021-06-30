<?php
    //Incluir classe de conexão
    require_once"classes/DAO/Conexao.class.php";
    //Incluir entidade Tipo
    require_once"classes/entidades/Tipo.class.php"; 
    //Incluir TipoDAO
    require_once"classes/DAO/TipoDAO.class.php";

     //Criar instâncias 
     $Tipo = new Tipo();
     $TipoDAO = new TipoDAO();
     
     //Listar os Tipos cadastrados no banco
     $tipos  = $TipoDAO->lerTodos();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Área do Tipo</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <!-- Corpo do Site -->
    <div class="container">
        <h1 class="text-center">
            <i class="fa fa-id-card"></i> Área Tipo de Usuário
        </h1>
        <hr>
        <?php include"nav.php"; ?>
        <hr>
        <a href="cadastro-tipo.php?p=cad-tipo" class="btn btn-success">
            <i class="fa fa-plus"></i> Cadastrar Tipo
        </a>

        <hr>

        <h5 class="text-center">Lista de Tipos</h5>
          
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                  //Percorrer a lista de tipos enviados pelo banco
                  //Exibir na tabela
                  foreach($tipos as $t){
                ?>
                    <tr>
                        <th scope="row"><?php echo $t['idTipo']; ?></th>
                        <th scope="row"><?php echo $t['descTipo']; ?></th>
                        <th scope="row"><?php echo $t['obsTipo']; ?></th>
                        <th scope="row">
                            <a href="edit-tipo.php" class="btn btn-info">
                              <i class="fa fa-edit"></i> Editar
                            </a>
                            <a href="del-tipo.php" class="btn btn-danger">
                                <i class="fa fa-trash"></i> Excluir
                            </a>
                        </th>
                    </tr>
                <?php
                  }
                ?>
            </tbody>
        </table>

        <hr>
        <?php include"footer.php"; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
</html>