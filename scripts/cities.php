<?php
$response = '';
$responseStyle = '';
if (isset($_POST['cities'])) {
    $inputCities = $_POST['cities'];
    $inputCities = htmlspecialchars($inputCities);
    $inputCities = urldecode($inputCities);
    $patternCities = '/^([\s]*[A-Za-zА-ЯЁа-яё]+[-\s]?[A-Za-zА-ЯЁа-яё]+[\s]*)(,([\s]*[A-Za-zА-ЯЁа-яё]+[-\s]?[A-Za-zА-ЯЁа-яё]+[\s]*))*$/u';

    if (preg_match($patternCities, $inputCities)) {
        $inputCities = mb_strtolower($inputCities, 'UTF-8');
        $arrayCities = explode(',', $inputCities);

        foreach ($arrayCities as $key => $city) {
            $arrayCities[$key] = trim($arrayCities[$key]);
            $arrayCities[$key] = mb_convert_case($arrayCities[$key], MB_CASE_TITLE, 'UTF-8');
        }

        $arrayCities = array_unique($arrayCities);
        sort($arrayCities);
        $response = implode(', ', $arrayCities);
    } elseif (!empty($inputCities)) {
        $response = 'Неверный ввод!';
        $responseStyle = 'style="color: rgba(232, 74, 95, 1)"';
    }
}
