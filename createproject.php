<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un projet</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .form-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: var(--spacing-md);
        }

        .form-card {
            background: var(--surface-color);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
            padding: var(--spacing-lg);
            width: 100%;
            max-width: 500px;
        }

        .form-card h1 {
            font-size: 1.875rem;
            margin-bottom: var(--spacing-lg);
            text-align: center;
            color: var(--secondary-color);
        }

        .form-group {
            margin-bottom: var(--spacing-md);
        }

        .form-group label {
            display: block;
            margin-bottom: var(--spacing-xs);
            font-weight: 500;
            color: var(--text-color);
            font-size: 0.95rem;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid var(--border-color);
            border-radius: var(--radius-md);
            font-family: var(--font-body);
            font-size: 1rem;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
            background-color: var(--background-color);
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
            background-color: var(--surface-color);
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: var(--text-muted);
        }

        .form-group textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid var(--border-color);
            border-radius: var(--radius-md);
            font-family: var(--font-body);
            font-size: 1rem;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
            background-color: var(--background-color);
            resize: vertical;
            min-height: 120px;
        }

        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
            background-color: var(--surface-color);
        }

        .submit-btn {
            width: 100%;
            padding: 0.875rem 1.5rem;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: var(--radius-md);
            font-size: 1rem;
            font-weight: 600;
            transition: background-color 0.2s ease, transform 0.2s ease;
            cursor: pointer;
            margin-top: var(--spacing-md);
        }

        .submit-btn:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
        }

        .submit-btn:active {
            transform: translateY(0);
        }
    </style>
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