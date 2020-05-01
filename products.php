<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Товары</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php include('scripts/add_os.php') ?>
    <div class="wrapper">
        <div class="content">
            <header>
                <?php include('nav.php') ?>
                <a class="button-signin" href="signin.php"><button>Войти</button></a>
            </header>

            <div class="products-wrapper">
                <div class="products-content">
                    <?php include('scripts/goods.php') ?>
                    <div class="add-side">
                        <form method="POST">
                            <input type="text" name="productID" placeholder="ID товара" required />
                            <input type="text" name="productName" placeholder="Имя товара" required />
                            <input type="text" name="productPrice" placeholder="Цена товара" required />
                            <input type="text" name="productDesc" placeholder="Описание товара" required />
                            <input type="submit" value="Добавить в список">
                        </form>
                        <p <?= $responseStyle ?>><?= $response ?></p>
                    </div>
                    <div class="list-side">
                        <nav>
                            <ul class="list-links">
                                <?php showList($list); ?>
                            </ul>
                        </nav>
                    </div>
                    <div class="info-side">
                        <p><?= showItem($list); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.html') ?>
    </div>
</body>

</html>