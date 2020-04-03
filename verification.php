<?php
require('./connec.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
if(isset($_POST['username']) && isset($_POST['password']))
{
    
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
        
    if($username !== "" && $password !== "")
{       $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM user";
        $statement = $pdo->query($query);
        $count = $statement->fetch();
        
        if($count['name_user']==$username && $count['pass_word']==$password) // nom d'utilisateur et mot de passe correctes
        {                          
           header('Location: ./deloradd.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
// fermer la connexion
?>