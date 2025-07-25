<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Navbar Admin</title>
  <style>
    body {
      margin: 20px;
      font-family: Arial, sans-serif;
    }

    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #f7f9fb;
      border: 1px solid #444;
      padding: 10px 20px;
      border-radius: 10px 20px 20px 10px;
    }

    .navbar-left {
      font-weight: bold;
      margin-right: 20px;
    }

    .nav-buttons {
      display: flex;
      gap: 10px;
    }

    .nav-buttons button {
      background-color: #5a6670;
      color: white;
      border: none;
      padding: 8px 12px;
      border-radius: 5px;
      cursor: pointer;
    }

    .nav-buttons button:hover {
      background-color: #444e55;
    }

    .navbar-right {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .logout-button {
      background-color: #222;
      color: white;
      border: none;
      padding: 8px 14px;
      border-radius: 5px;
      cursor: pointer;
    }

    .logout-button:hover {
      background-color: #000;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="navbar-left">Touche pas au klaxon</div>
    <div class="nav-buttons">
     <form action="./auth/login.php" method="get">
        <label for="visiteur">utilisateur</label>
        <input type="text">
     </form>
      <form action="./auth/login.php" method="get">
        <label for="visiteur">agence</label>
        <input type="text">
     </form>
      <form action="./auth/login.php" method="get">
        <label for="visiteur" name="trajet">trajet</label>
        <input type="text">
         <label for="password">mot de passe</label><br>
                <input type="password" name="password" id="password"><br><br>
                <input type="submit" value="soumettre">
     </form>
    </div>
    <div class="navbar-right">
      <span>Bonjour Xxxxxx Xxxxx</span>

      <button class="logout-button">Déconnexion</button>
    </div>
  </div>

</body>
</html>
