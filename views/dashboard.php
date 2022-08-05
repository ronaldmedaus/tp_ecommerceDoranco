<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <h1> Bienvenu à <?= $_SESSION["username"] ?></h1>
    <form action="logout.php">
        <button type="submit" >Déconnexion</button>
    </form>
    
</body>
</html>