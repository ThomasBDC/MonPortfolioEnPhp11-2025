<?php 
    require_once 'utils/session.php';
    require_once 'db/functions.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // <!-- Cas où le formulaire a été rempli et soumis -->
        $email = $_POST["email"];
        $password = $_POST["password"];

        //Récupérer l'utilisateur avec cet email
        $user = getUserByEmail($email);

        if($user and password_verify($password, $user['password'])){
            $_SESSION['idUser'] = $user['idUser'];
            header('Location: index.php');
        }
        else{
            echo "Mot de passe incorrect";
        }

    }
?>

<?php require_once "includes/header.php"; ?>

<main>
    <div class="form-container">
    <div class="form-card">
        <h1>Me connecter</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
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
