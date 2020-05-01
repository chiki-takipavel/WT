<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Операционные системы пользователей</title>
</head>

<body>
    <?php include('scripts/add_os.php') ?>
    <div class="wrapper">
        <div class="content">
            <h1>Операционные системы пользователей</h1>
            <table>
                <tr>
                    <th>Операционная система</th>
                    <th>Количество пользователей</th>
                </tr>
                <tr>
                    <th colspan="2">
                        <hr>
                    </th>
                </tr>
                <?php include('scripts/os_table.php') ?>
                <tr>
                    <th colspan="2">
                        <hr>
                    </th>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>