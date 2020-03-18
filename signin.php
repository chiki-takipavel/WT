<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <div class="wrapper">
      <div class="content">
        <header>
          <?php include('nav.php') ?>
        </header>

        <div class="signin">
          <form class="signin-box" action="signin.php" method="post">
            <h1>Авторизация</h1>
            <input type="text" name="" placeholder="Имя пользователя">
            <input type="password" name="" placeholder="Пароль">
            <input type="submit" name="" value="Войти">
          </form>
        </div>
      </div>

      <?php include('footer.php') ?>
    </div>

  </body>
</html>
