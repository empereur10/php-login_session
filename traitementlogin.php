<?php
    if($_SERVER["REQUEST_METHOD"] = "POST") {
        if(
        isset($_POST['username']) and $_POST['username'] != '' and
        isset($_POST['password']) and $_POST['password'] != '' ) {
            session_start();
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            if($username == $_SESSION['user']['username'] and $password == $_SESSION['user']['password']){
                $_SESSION['loggedin'] = true;
                header('Location: bienvenu.php');
            }
            else{
                header('Location: index.php');
                $_SESSION['error'] = "Mot de passe ou Username incorrect";
            }
        }
        else{
            echo 'veuillez remplir tous les champs';
        }
    }