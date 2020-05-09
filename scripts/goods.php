<?php
function editInputData(&$inputData): string
{
    $inputData = htmlspecialchars($inputData);
    $inputData = urldecode($inputData);
    $inputData = trim($inputData);
    return $inputData;
}

function isIDExists(&$list, &$newID): bool
{
    foreach ($list as $item) {
        if ($item['id'] == $newID) {
            return true;
        }
    }
    return false;
}

function errorResponse(&$list, &$newItem): string
{
    $patternID = '/^[1-9][0-9]{0,3}$/u';
    $patternName = '/^[a-zа-яё]+([ ]?[a-zа-яё]+)*$/ui';
    $patternPrice = '/^[0-9]{1,8}([.][0-9]{1,2})?$/u';

    if (!preg_match($patternID, $newItem['id'])) {
        return 'Неверно указан id!';
    }
    if (isIDExists($list, $newItem['id'])) {
        return 'Такой id уже есть!';
    }
    if (!preg_match($patternName, $newItem['name'])) {
        return 'Неверно указано имя товара!';
    }
    if (!preg_match($patternPrice, $newItem['price'])) {
        return 'Неверно указана цена!';
    }
    return '';
}

function openList(&$fileName, &$keys): array
{
    $list = array(array());
    if (file_exists($fileName)) {
        $file = fopen($fileName, 'r');
        $row = 0;
        while (($tempItem = fgetcsv($file)) !== false) {
            $list[$row] = array_combine($keys, $tempItem);
            $row++;
        }
        fclose($file);
    }
    return $list;
}

function showList(&$list)
{
    foreach ($list as $item) {
        echo '<li><a href="?id=' . $item['id'] . '">' . $item['name'] . '</a></li>';
    }
}

function showItem(&$list): string
{
    if (isset($_GET['id'])) {
        $activeID = $_GET['id'];
        foreach ($list as $item) {
            if ($item['id'] == $activeID) {
                $itemArray = $item;
                $itemArray['priceSale'] = 'Цена со скидкой 15%: ' . round($item['price'] * 0.85, 2);
                $itemString = implode('<br>', $itemArray);
                return $itemString;
            }
        }
        if (empty($itemString)) {
            return 'Товар не найден!';
        }
    } else {
        return 'Выберите один из товаров';
    }
}

$response = '';
$responseStyle = 'style="color: rgba(232, 74, 95, 1)"';
$fileName = 'assets/files/products.csv';
$keys = array('id', 'name', 'price', 'desc');
$list = openList($fileName, $keys);

if (isset($_POST['productID']) && isset($_POST['productName']) && isset($_POST['productPrice']) && isset($_POST['productDesc'])) {
    $newProduct = array($_POST['productID'], $_POST['productName'], $_POST['productPrice'], $_POST['productDesc']);
    $newProduct = array_combine($keys, $newProduct);
    $newProduct = array_map('editInputData', $newProduct);
    $response = errorResponse($list, $newProduct);

    if (empty($response)) {
        $fileProducts = fopen($fileName, 'a+');
        fputcsv($fileProducts, $newProduct);
        fclose($fileProducts);
        $list = openList($fileName, $keys);
    }
}
