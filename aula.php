<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema WEB</title>
</head>
<body>

    <!-- Corpo do site -->
    <div class="container">
        <h1 class="text-center">
            <i class="fa fa-bandcamp"></i> Sistema WEB
        </h1>
        <hr>
        <?php include"nav.php"; ?>
        <hr>
        <h2 class="text-center">
            <i class="fa fa-cogs"></i> Área restrita
        </h2>
        <div class="d-flex justify-content-center">
            <form class="form-inline">
                <div class="form-group mx-sm-4 mb-2">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" class="form-control" 
                        name="emailUser" id="email" placeholder="Email">
                </div>
                <div class="form-group mx-sm-4 mb-2">
                    <label for="inputPassword2" class="sr-only">Password</label>
                    <input type="password" class="form-control" 
                        name="senhaUser" 
                        id="inputPassword2" placeholder="Senha">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Entrar</button>
            </form>
        </div>
        <hr>
        <?php include"footer.php"; ?>
    </div>
    <!-- Fim Corpo do site -->

</body>

</html>