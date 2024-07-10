<?php

require_once './connect_db.php';


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="./html/register.css">
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription</title>
    </head>
<body>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>

<form id="form1" method="post" action="./index.php">
    <div class="box">

        <h1>Inscription</h1>

            <input type="vachar" name="first_name" placeholder="Prénom" onFocus="field_focus(this, 'first_name');" class="name" required/>

            <input type="vachar" name="last_name" placeholder="Nom" onFocus="field_focus(this, 'last_name');" class="name" required/>

            <input type="vachar" name="email" placeholder="email" onFocus="field_focus(this, 'email');"  class="email" required/>
  
            <input type="password" name="password" placeholder="••••••••" onFocus="field_focus(this, 'password');"  class="email" required/>

            <input type="Varchar" name="phone" placeholder="Numéro de Téléphone" onFocus="field_focus(this, 'phone_number');"  class="email"/>

            <input type="date" name="birthday" placeholder="Dâte de naissance" onFocus="field_focus(this, 'birthday');"  class="email" required/>
  

            <button id="btn2" type="submit" form="form1" value="Submit">Envoyer</button>



  
    </div> <!-- End Box -->
  
</form>


<script src="./html/register.js"></script>
</body>
</html>

