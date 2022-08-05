<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Connexion</title>
</head>
<body>

    <section class="d-flex justify-content-center align-items-center vw-100 vh-100">
        <div class="w-50 rounded border border-info " style="padding: 4rem 3rem ;">
            <h1 style="margin-bottom: 3rem; text-align:center;">Connexion</h1>
            <form action="<?=htmlentities($_SERVER["PHP_SELF"])?>" method="POST" >
                <div class="form-floating mb-5">
                    <input type="text" class="form-control border-primary" id="floatingInput" name="username" placeholder="Nom d'utilisateur">
                    <label for="floatingInput">Nom d'utilisateur</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control border-primary" id="floatingPassword" name="password" placeholder="Password">
                    <label for="floatingPassword">Mot de passe</label>
                </div>
                <?php if(isset($errorMessage)):?>
                    <div class="alert alert-danger">
                        <?= $errorMessage ?>
                    </div>
                <?php endif  ?>
                <button type="submit" >Se connecter</button>
            </form>
        </div>
    </section>

</body>
</html>