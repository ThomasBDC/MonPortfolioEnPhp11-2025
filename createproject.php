<?php 
    require_once 'utils/session.php';
    require_once 'db/functions.php'; 
    requireLogin();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // <!-- Cas où le formulaire a été rempli et soumis -->
        $titre = $_POST["title"];
        $description = $_POST["description"];
        $github_link = $_POST["github_link"];
        $project_link = $_POST["project_link"];
        $success = insertProject($titre, $description, $github_link, $project_link);
    }
?>

<?php require_once "includes/header.php"; ?>

<div class="form-container">
    <div class="form-card">
        <?php 
            if(isset($success)):
                if($success):?>
                    <div class="alert success">
                        Le projet a bien été créé
                    </div>
                <?php 
                else:?>
                    <div class="alert error">
                            Une erreur est survenue
                    </div>
                <?php
                endif;
            endif;?>
        <h1>Créer un projet</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="title">Titre du projet</label>
                <input type="text" name="title" id="title" placeholder="Ex: Mon application web" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" placeholder="Ex: Une application pour gérer les tâches" required></textarea>
            </div>

            <div class="form-group">
                <label for="github_link">Lien GitHub</label>
                <input type="url" name="github_link" id="github_link" placeholder="https://github.com/..." required>
            </div>

            <div class="form-group">
                <label for="project_link">Lien du projet</label>
                <input type="url" name="project_link" id="project_link" placeholder="https://example.com" required>
            </div>

            <button type="submit" class="submit-btn">Créer le projet</button>
        </form>
    </div>
</div>
<?php include_once "includes/footer.php"; ?>
