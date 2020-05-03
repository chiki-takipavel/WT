<?php
function editInputData(&$inputData): string
{
    $inputData = htmlspecialchars($inputData);
    $inputData = urldecode($inputData);
    $inputData = trim($inputData);
    return $inputData;
}

function emailIsValid(&$email): bool
{
    $patternEmail = '/^([a-z0-9!#$%&\'*+\/=?^_`{|}~-]+(\.[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+)*)@(([a-z0-9]([a-z0-9-]*[a-z0-9])?\.)+[a-z0-9]([a-z0-9-]*[a-z0-9])?)$/ui';
    $email = mb_strtolower($email, 'UTF-8');
    return preg_match($patternEmail, $email);
}

function usernameIsValid(&$username): bool
{
    $patternUsername = '/^(?=.{3,32}$)[a-zа-яё0-9]+([_-]?[a-zа-яё0-9]+)*$/ui';
    return preg_match($patternUsername, $username);
}

function openUsersList(&$fileName, &$keys): array
{
    $list = array(array());
    if (file_exists($fileName)) {
        $file = fopen($fileName, 'r');
        $row = 0;
        while (($tempUser = fgetcsv($file)) !== false) {
            $list[$row] = array_combine($keys, $tempUser);
            $row++;
        }
        fclose($file);
    }
    return $list;
}

function isUserExists(&$list, &$newEmail): bool
{
    foreach ($list as $user) {
        if ($user['email'] == $newEmail) {
            return true;
        }
    }
    return false;
}

$response = '';
$responseStyle = 'style="color: rgba(232, 74, 95, 1)"';
if (isset($_POST['userName']) && isset($_POST['userEmail'])) {
    $keys = array('name', 'email');
    $itemUser = array($_POST['userName'], $_POST['userEmail']);
    $itemUser = array_combine($keys, $itemUser);
    $itemUser = array_map('editInputData', $itemUser);

    if (emailIsValid($itemUser['email'])) {
        if (usernameIsValid($itemUser['name'])) {
            $dbName = 'LW5-N6';
            $dbLink = mysqli_connect($_SERVER['DB_HOST'], $_SERVER['DB_USER'], $_SERVER['DB_PASSWORD'], $dbName);
            if ($dbLink) {
                mysqli_set_charset($dbLink, 'UTF8');
                $itemUser['name'] = mysqli_real_escape_string($dbLink, $itemUser['name']);
                $itemUser['email'] = mysqli_real_escape_string($dbLink, $itemUser['email']);
                $query = 'INSERT INTO `Users` (`user_name`, `user_email`) 
                VALUES ("' . $itemUser['name'] . '", "' . $itemUser['email'] . '")';
                mysqli_query($dbLink, $query);
                mysqli_close($dbLink);
            } else {
                $response = 'Ошибка подключения!';
            }
            /*
            $fileName = 'assets/files/users.txt';
            $listUsers = openUsersList($fileName, $keys);
            if (!isUserExists($listUsers, $itemUser['email'])) {
                $fileUsers = fopen($fileName, 'a+');
                fputcsv($fileUsers, $itemUser);
                fclose($fileUsers);
            } else {
                $response = 'Пользователь с таким e-mail уже существует!';
            }
            */
        } else {
            $response = 'Неверно указано имя пользователя! Минимальная длина - 3 символа, максимальная - 32. 
                        Допустимые символы: буквы, цифры и нижнее подчёркивание или дефис внутри имени.';
        }
    } else {
        $response = 'Неверно указан e-mail!';
    }
}
