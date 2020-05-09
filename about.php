<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Математика</title>
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

            <div class="about-wrapper">
                <div class="about-content">
                    <div class="photo-side">
                        <img class="photo-developer" src="assets/img/Developer.jpg" alt="Developer"></img>
                    </div>
                    <div class="info-side">
                        <?php include('scripts/cities.php') ?>
                        <p>Это просто лабораторная работа по веб-технологиям. Лучше введите названия городов через запятую.</p>
                        <form method="POST">
                            <input type="text" name="cities" placeholder="Введите города" required />
                            <input type="submit" value="Отсортировать">
                        </form>
                        <p <?= $responseStyle ?>><?= $response ?></p>

                        <?php include('scripts/send_mail.php'); ?>
                        <p>Отправим сообщения пользователям</p>
                        <form method="POST">
                            <input type="text" name="recipients" placeholder="Введите получателей через запятую" value="<?= $isError ? htmlspecialchars($_POST['recipients']) : '' ?>" required />
                            <input type="text" name="subject" placeholder="Введите тему" value="<?= $isError ? htmlspecialchars($_POST['subject']) : '' ?>" required />
                            <textarea rows="5" name="message" placeholder="Введите сообщение" required><?= $isError ? htmlspecialchars($_POST['message']) : '' ?></textarea>
                            <input type="submit" value="Отправить">
                        </form>
                        <p <?= $errorMailStyle ?>><?= $errorMail ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.html') ?>
    </div>
</body>

</html>