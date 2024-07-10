<?php

require_once './connect_db.php';


 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./html/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>

<form method="post" action="index.html">
    <div class="box">
        <h1>Connexion</h1>
            <input type="email" name="email" placeholder="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  
            <input type="password" name="email" placeholder="••••••••" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  
            <a href="index.php"><div class="btn">Se connecter</div></a> <!-- End Btn -->

            <a href="register.php"><div id="btn2">S'inscrire</div></a> <!-- End Btn2 -->


  
</div> <!-- End Box -->
  
</form>

<p>Mot de Passe oublier ? <a href="https://www.supergeek.fr/blog/comment-retrouver-un-mot-de-passe-oublie-ou-perdu/" style="color:#f1c40f;" >Clique ici</a></p>
<script src="./html/login.js"></script>
</body>
</html>


