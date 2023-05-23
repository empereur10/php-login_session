<?php 
    session_start(); 
    if(!isset($_SESSION['loggedin']) and $_SESSION['loggedin'] == false ){
        header('Location: index.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/css/bienvenu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="site d'enregistrement">
    <meta property="og:title" content="Enregistrement ">
    <meta property="og:description" content="votre profil">
    <meta property="og:type" content="website">
    <meta property="og:image" content="images/hvl.jpg">
    <meta property="og:url" content="https://empereur10.github.io/letecode">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BIENVENU</title>
</head>
<body>
    <div class="container">
        <img src="images/hvl.jpg" class="img" alt="" srcset="">
        <p class="gras">Bienvenu dans votre compte, <?php echo $_SESSION['user']['nom']?></p>
        <p class="center"><?php echo $_SESSION['user']['username']?></p>
        <p class="center"><?php echo $_SESSION['user']['adresse']?></p>
        
        <form action="logout.php" method="post">
            <button  type="submit">Déconnexion</button>
            
        </form>
    </div>
</body>
</html>