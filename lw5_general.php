<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Лабораторная работа 5. Основное задание</title>
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <h1>Лабораторная работа 5. Основное задание</h1>
            <table>
                <tr>
                    <th>Имя автора</th>
                    <th>Статья</th>
                    <th>Дата публикации</th>
                </tr>
                <tr>
                    <th colspan="3">
                        <hr>
                    </th>
                </tr>
                <?php include('lw5_general_db.php'); ?>
                <tr>
                    <th colspan="3">
                        <hr>
                    </th>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>