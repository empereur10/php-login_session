<?php
    if($_SERVER["REQUEST_METHOD"] = "POST") {
        if(isset($_POST['nom']) and $_POST['nom'] != '' and
        isset($_POST['adresse']) and $_POST['adresse'] != '' and
        isset($_POST['username']) and $_POST['username'] != '' and
        isset($_POST['password']) and $_POST['password'] != '' ) {
            $name = htmlspecialchars($_POST['name']);
            $adress = htmlspecialchars($_POST['adresse']);
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);

            $user = [
                "nom" => $nom,
                "username" => $username,
                "adresse" => $adresse,
                "password" => $password
            ];
            session_start();
            $_SESSION['user'] = $user;
            $_SESSION['loggedin'] = true;
            header('Location: bienvenu.php');
        }
        else{
            echo 'veuillez remplir tous les champs';
        }
    }
    else{
        header('Location: index.php');
    }