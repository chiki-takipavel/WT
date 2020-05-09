<?php
session_start();
$page = substr($_SERVER['SCRIPT_NAME'], strpos($_SERVER['SCRIPT_NAME'], '/') + 1);
if (isset($_SESSION['history'])) {
    $_SESSION['history'][] = array('time' => time(), 'page' => $page);
} else {
    $_SESSION['history'] = array();
    $_SESSION['history'][] = array('time' => time(), 'page' => $page);
}
