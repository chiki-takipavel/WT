<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Для школьников</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php include('scripts/add_history.php'); ?>
    <div class="wrapper">
        <div class="content">
            <header>
                <?php include('nav.php') ?>
                <a class="button-signin" href="signin.php"><button>Войти</button></a>
            </header>

            <div class="training">
                <h1 class="training-title">Для школьников</h1>
            </div>

            <div class="choose-topic">
                <a class="item-topic" href="#">
                    <button>Числовые множества</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Функции</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Тождественные преобразования алгебраических выражений</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Тождественные преобразования тригонометрических выражений</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Уравнения</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Прогрессии</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Неравенства</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Планиметрия</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Стереометрия</button>
                </a>
            </div>

        </div>

        <?php include('footer.html') ?>
    </div>

</body>

</html>