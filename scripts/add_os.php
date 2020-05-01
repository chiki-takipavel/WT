<?php
session_start();
if (!isset($_SESSION['os'])) {
    $_SESSION['os'] = uniqid();
    $dbName = 'LW8-OS';
    $dbLink = mysqli_connect($_SERVER['DB_HOST'], $_SERVER['DB_USER'], $_SERVER['DB_PASSWORD'], $dbName);
    if (mysqli_connect_errno()) {
        echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
    } else {
        mysqli_set_charset($dbLink, 'UTF8');

        $browser = get_browser(null, true);
        $query = 'INSERT INTO `OS`(`os_name`, `os_users_count`) VALUES ("' . $browser['platform'] . '", 1)
        ON DUPLICATE KEY UPDATE `os_users_count`=`os_users_count`+1';

        mysqli_query($dbLink, $query);

        mysqli_close($dbLink);
    }
}
