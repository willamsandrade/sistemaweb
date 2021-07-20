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
     
     //Selecionar o Tipo pelo ID enviado
     //O id do tipo foi enviado através do método GET
     //Ex: edit-tipo.php?p=cad-tipo&idTipo=<?php echo $t['idTipo']
     $tipos  = $TipoDAO->dadosTipo($_GET['idTipo']);

     //Recuperar os dados do tipo
     //Na linha 16 os dados foram armazenados dentro de $tipos
     //Iremos usar o forech para percorrer e recuperar esse dados
     foreach($tipos as $t){
        //Retorno do banco armazendo no objeto tipo
        $Tipo->setDescTipo($t['descTipo']);
        //Retorno do banco armazendo no objeto tipo
        $Tipo->setObsTipo($t['obsTipo']); 
     }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Editar de Tipo</title>
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
        <h1 class="text-center"><i class="fa fa-id-card"></i> Editar Tipo de Usuário</h1>
        <hr>
        <?php include"nav.php"; ?>
        <hr>
        <form action="fim-edit-tipo.php?p=cad-tipo" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="descTip">Descrição Tipo</label>
                        <input type="text" 
                                class="form-control" id="descTipo"
                                placeholder="Ex: Funcionário" 
                                value="<?php echo $Tipo->getDescTipo(); ?>"
                                name="descTip" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="obsTipo">Observação Tipo</label>
                        <input type="text" 
                                class="form-control" 
                                id="obsTipo" name="obsTipo"
                                value="<?php echo $Tipo->getObsTipo(); ?>"
                                placeholder="Ex: Usuário Limitado" required>
                    </div>
                </div>
            </div>
            <input type="hidden" name="idTipo" value="<?php echo $_GET['idTipo']; ?>" ?>
            <input type="submit" value="Editar" class="btn btn-info btn-block">
        </form>
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