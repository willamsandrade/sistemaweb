<!DOCTYPE html>

<html lang="pt-br">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>



<body>



    <div class="container">



        <h1 class="text-center"><i class="fa fa-user-circle"></i> Cadastro Usuário</h1>



        <hr>



        <?php include"nav.php"; ?>



        <hr>



        <form action="confirmacao.php?p=con" method="post">

            <div class="row">

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="nomeUser">Nome</label>

                        <input type="text" class="form-control" id="nomeUser" placeholder="Nome" name="nomeUser"

                            maxlength="20" required>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="sobreUser">Sobrenome</label>

                        <input type="text" class="form-control" id="sobreUser" placeholder="Sobrenome" name="sobreUser"

                            required>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="emailUser">Email</label>

                        <input type="email" class="form-control" id="emailUser" placeholder="Email" name="emailUser"

                            required>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="senhaUser">Senha</label>

                        <input type="password" class="form-control" id="senhaUser" placeholder="Senha" name="senhaUser"

                            required>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="idTipo">Tipo de Usuário</label>

                        <select class="form-control" name="idTipo" id="idTipo" required>

                            <option>-- Selecione um tipo --</option>

                            <option>-- Tipo --</option>

                        </select>

                    </div>

                </div>

            </div>

            <input type="submit" value="Cadastrar" class="btn btn-success btn-block">

        </form>



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