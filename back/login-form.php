<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chloé VAUTHIER | Se connecter</title>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/back.css">
   
</head>
<body>
    <div class="form__container">
   <form action="login-form-handler.php" method="post" class="main__form">
       <h1 class="main__form">Se connecter</h1>
       <div class="main__form">
            <label for="input_name">Nom d'utilisateur</label>
            <input type="text" name="username">
       </div>
       <div class="main__form">
       <label for="input_password" input="password">Mot de passe</label>
        <input type="password" name="password">
       </div>
       <div class="main__form">
           <input type="submit" value="Se connecter" class="btn__style">
           
       </div>
       <div class="main__form">
            <a href="index.php" class="btn__style">Retour</a>
       </div>
   </form> 
   </div>
   
</body>
</html>