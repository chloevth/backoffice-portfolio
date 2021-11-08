<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chloé VAUTHIER | S'inscrire</title>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/back.css">
  
</head>
<body class="form__container">
<form action="register-form-handler.php" method="post" class="main__form">
        <div class="main__form">
            <label for="input-username">Nom d'utilisateur :</label>
            <input type="text" name="username" id="input-username" required>
        </div>
        <div class="main__form">
            <label for="input-email">Email :</label>
            <input type="email" name="email" id="input-email" required>
        </div>
        <div class="main__form">
            <label for="input-password">Mot de passe :</label>
            <input type="password" name="password" id="input-password" required>
        </div>
        <div class="main__form">
            <label for="input-confirmation">Confirmation du mot de passe :</label>
            <input type="password" name="confirmation" id="input-confirmation" required>
            <span id="error"></span>
        </div>

        <div class="main__form">
            <input type="submit" value="enregistrer" id='submit' class="btn__style">
        </div>
        <a href="index.php" class="main__form btn__style">
      Retour
    </a>
    </form>
  
    <script src="main.js"></script>
</body>
</html>