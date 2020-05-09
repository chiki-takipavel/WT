<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>История посещений</title>
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <h1>История посещений</h1>
            <table>
                <tr>
                    <th>Время посещения</th>
                    <th>Страница</th>
                </tr>
                <tr>
                    <th colspan="2">
                        <hr>
                    </th>
                </tr>
                <?php
                session_start();
                foreach ($_SESSION['history'] as $row) {
                    echo '<tr>';
                    echo '<td>' . date('d.m.Y H:i', $row['time']) . '</td>';
                    echo '<td><a href="/' . $row['page'] . '">' . $row['page'] . '</a></td>';
                    echo '</tr>';
                }
                ?>
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