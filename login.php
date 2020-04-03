<?php $title='Login'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php if (isset($title)):?>
            <?php echo $title; ?>
        <?php else: ?>
            Tony Montana
        <?php endif ?>
    </title>
       
        <!-- importer le fichier de style -->
    <link rel="stylesheet" href="login.css" media="screen" type="text/css" />
</head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>Login</h1>
                
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter your name" name="username" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter password" name="password" required>

                <input type="submit" id='submit' value='ENTER' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
       
            
    </body>
</html>