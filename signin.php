<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset='utf-8'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Идентификация</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="wrapper">
    <div class="content">
      <header>
        <?php include('nav.php') ?>
      </header>

      <div class="signin">
        <form class="signin-content" method="post">
          <h1>Идентификация</h1>
          <input type="text" name="userName" placeholder="Ваше имя" required />
          <input type="text" name="userEmail" placeholder="Ваш e-mail" required />
          <input type="submit" value="Запомнить меня">
        </form>
      </div>
    </div>

    <?php include('footer.html') ?>
  </div>

</body>

</html>