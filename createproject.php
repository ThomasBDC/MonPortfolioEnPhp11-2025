<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un projet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <div class="form-card">
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
</body>
</html>