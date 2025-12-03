<?php 
    require_once 'utils/session.php';
    require_once 'db/functions.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // <!-- Cas où le formulaire a été rempli et soumis -->
        $username = $_POST["username"];
        $password = $_POST["password"];

        //Simuler une connexion sans passer par la base de données

        if($username == "ThomasBDC" and $password == "Azerty00"){
            $_SESSION['idUser'] = "ThomasBDC";
            header('Location: index.php');
        }
        else{
            echo "Mot de passe incorrect";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php require_once "includes/header.php"; ?>

    <main>
        <div class="form-container">
        <div class="form-card">
            <h1>Me connecter</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input name="password" id="password" required>
                </div>

                <button type="submit" class="submit-btn">Me connecter</button>
            </form>
        </div>
    </div>
    </main>

    <?php include_once "includes/footer.php"; ?>

</body>
</html>