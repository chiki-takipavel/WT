<?php
$dbName = 'LW8-OS';
$dbLink = mysqli_connect($_SERVER['DB_HOST'], $_SERVER['DB_USER'], $_SERVER['DB_PASSWORD'], $dbName);
if ($dbLink) {
    mysqli_set_charset($dbLink, 'UTF8');

    $query = 'SELECT `os_name`, `os_users_count` FROM `OS`
    ORDER BY `os_users_count` DESC';

    $queryResult = mysqli_query($dbLink, $query);
    if ($queryResult) {
        while ($row = mysqli_fetch_assoc($queryResult)) {
            echo '<tr>';
            echo '<td>' . $row['os_name'] . '</td>';
            echo '<td>' . $row['os_users_count'] . '</td>';
            echo '</tr>';
        }
        mysqli_free_result($queryResult);
    }

    mysqli_close($dbLink);
} else {
    echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
}
