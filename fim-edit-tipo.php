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

    //Recebendo dados do formulário 
    //Armazenando na classe entidade
    $Tipo->setIdTipo($_POST['idTipo']);
    $Tipo->setDescTipo($_POST['descTip']);
    $Tipo->setObsTipo($_POST['obsTipo']);

    //Efetuar edição
    if( $TipoDAO->editar($Tipo) ){ //Se cadastrou
       $resultado = true;
    }else{ //Se não cadastrou
        $resultado = false; 
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Fim Cadastro de Tipo</title>
    <!-- Cole aqui css -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

    <!-- Início corpo do site --> 
    <div class="container">
        <h1 class="text-center"><i class="fa fa-id-card"></i> Cadastro Tipo de Usuário</h1>
        <hr>
        <?php include"nav.php"; ?>
        <hr>
        <?php
            //Alerta - Resultado final do cadastro
            if($resultado){ //Se cadastrou mostrar sucesso
        ?>
            <div class="alert alert-success" role="alert">
                 Cadastro Editado com sucesso!
            </div>
        <?php
            }else{ //Se não cadastrou mostrar erro
        ?>  
            <div class="alert alert-danger" role="alert">
                 Cadastro não editado, Tipo já existe, tente outro!
            </div>       
        <?php 
            } 
        ?>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="descTip">Descrição Tipo</label>
                    <br>
                    <strong><?php echo $Tipo->getDescTipo(); ?></strong>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="obsTipo">Observação Tipo</label>
                    <br>
                    <strong><?php echo $Tipo->getObsTipo(); ?></strong>
                </div>
            </div>
        </div>
        <hr>
        <a href="area-tipo.php?p=tipo" class="btn btn-secondary">Voltar</a>
        <hr>
        <?php include"footer.php"; ?>
    </div>
    <!-- Fim corpo do site --> 


    <!-- Cole aqui javascript -->
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