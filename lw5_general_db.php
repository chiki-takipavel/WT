<?php
$dbHost = 'localhost';
$dbUser = '***';
$dbPassword = '***';
$dbName = 'LW5-General';

$dbLink = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
if (mysqli_connect_errno()) {
    echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
} else {
    mysqli_set_charset($dbLink, 'UTF8');

    $query = 'SELECT `author_username`, `article_title`, `article_date_publication` 
    FROM `Articles` INNER JOIN `Authors` ON `Articles`.`author_id` = `Authors`.`author_id`
    ORDER BY `author_username`, `article_date_publication`';

    $queryResult = mysqli_query($dbLink, $query);
    if ($queryResult) {
        while ($row = mysqli_fetch_assoc($queryResult)) {
            echo '<tr>';
            echo '<td>' . $row['author_username'] . '</td>';
            echo '<td>' . $row['article_title'] . '</td>';
            echo '<td>' . date('d.m.Y', strtotime($row['article_date_publication'])) . '</td>';
            echo '</tr>';
        }
        mysqli_free_result($queryResult);
    }

    mysqli_close($dbLink);
}
