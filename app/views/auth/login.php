<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Touche pas au Klaxon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Connexion</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="/login">
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse email</label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="prenom.nom@entreprise.fr">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" required placeholder="********">
                </div>
                <button type="submit" class="btn btn-primary w-100">Se connecter</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>