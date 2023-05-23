<?php 
    session_start(); 
    if(isset($_SESSION['loggedin']) and $_SESSION['loggedin'] == true ){
        header('Location: bienvenu.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="site d'enregistrement">
    <meta property="og:title" content="Enregistrement">
    <meta property="og:description" content="page d'enregistrement">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>enregistrement</title>
</head>
<body>
    <div class="container">
        <h1>S'enregistrer</h1>
        <form action="traitement.php" method="post">
            <input type="text"  placeholder="Nom complet" name="nom" id="name" required>
            <input type="email" placeholder="Adresse email" name="adresse" id="adress" required>
            <input type="text" placeholder="Username" name="username" id="username" required>
            <input type="password" placeholder="Mot de passe" name="password" id="password" required>
            <button type="submit"> Créer un compte</button>
            <p>Déjà membres? <a href="index.php">connectez-vous?</a></p>
        </form>
    </div>
</body>
</html>