<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Для студентов</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php include('scripts/add_history.php'); ?>
    <?php include('scripts/add_os.php') ?>
    <div class="wrapper">
        <div class="content">
            <header>
                <?php include('nav.php') ?>
                <a class="button-signin" href="signin.php"><button>Войти</button></a>
            </header>

            <div class="training">
                <h1 class="training-title">Для студентов</h1>
            </div>

            <div class="choose-topic">
                <a class="item-topic" href="#">
                    <button>Матрицы и определители</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Системы линейных алгебраических уравнений</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Векторы</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Аналитическая геометрия</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Пределы</button>
                </a>
                <a class="item-topic" href="/students/derivatives-1.php">
                    <button>Дифференциальное исчисление</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Интегральное исчисление</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Дифференциальные уравнения</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Ряды</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Теория вероятностей</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Математическая статистика</button>
                </a>
                <a class="item-topic" href="#">
                    <button>Линейное программирование</button>
                </a>
            </div>

        </div>

        <?php include('footer.html') ?>
    </div>

</body>

</html>