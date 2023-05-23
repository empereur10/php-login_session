<?php session_start(); 
    if(isset($_SESSION['loggedin']) and $_SESSION['loggedin'] == true ){
        header('Location: bienvenu.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="session">
    <meta property="og:title" content="Accueil">
    <meta property="og:description" content="site d'enregistrement">
    <meta property="og:type" content="website">
    <meta property="og:image" content="images">
    <meta property="og:url" content="">
    <link rel="stylesheet" href="styles/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONNEXION</title>
</head>
<body>
    <div class="container">
        <h1>Connexion</h1>
        <form action="traitementlogin.php" method="post">
            <input type="text" placeholder="Username" name="username" id="username" require>
            <input type="password" placeholder="Mot de passe" name="password" id="password" require>
            <button type="submit"> Se connecter</button>
            <div>
                <p class="error"><?php if(isset($_SESSION['error'])) { echo $_SESSION['error'];} ?></p>
            </div>
            <p>Pas encore membre? <a href="enregistrement.php" >créer un compte!</a></p>
            <?php unset($_SESSION['error']); ?>
        </form>
    </div>
</body>
</html>