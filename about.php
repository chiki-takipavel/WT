<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Математика</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <header>
                <?php include('nav.php') ?>
                <a class="button-signin" href="signin.php"><button>Войти</button></a>
            </header>

            <div class="about-wrapper">
                <div class="about-content">
                    <div class="photo-side">
                        <img class="photo-developer" src="assets/img/Developer.jpg" alt="Developer"></img>
                    </div>
                    <div class="info-side">
                        <p>Это просто лабораторная работа по веб-технологиям. Лучше введите названия городов через запятую.</p>
                        <form method="POST">
                            <input type="text" name="cities" placeholder="Введите города" required />
                            <input type="submit" value="Отсортировать">
                        </form>
                        <?php include('cities.php') ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.html') ?>
    </div>
</body>

</html>