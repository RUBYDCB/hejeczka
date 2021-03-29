<!DOCTYPE html>
<html>
<head>
  <title>Logownaie</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
      <h2>Logowanie</h2>
  </div>

  <form method="post" action="login.php">
      <div class="input-group">
          <label>Nazwa uzytkownika</label>
          <input type="text" name="username" >
      </div>
      <div class="input-group">
          <label>Haslo</label>
          <input type="password" name="password">
      </div>
      <div class="input-group">
          <button type="submit" class="btn" name="login_user">Login</button>
      </div>
      <p>
          Nie masz konta? <a href="register.php">Zarejestruj się</a>
        </br> <a href="loginadmin.php">admin panel</a>
        </br> <a href="modlogin.php">mod panel</a>
      </p>
  </form>
</body>
</html>