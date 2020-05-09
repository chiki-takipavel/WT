<?php
$menu = array('index.php' => 'Главная', 'products.php' => 'Товары', 'about.php' => 'О проекте');
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/') + 1);
?>

<nav>
    <ul class="nav-links">
        <?php foreach ($menu as $key => $menuItem) {
            echo '<li>';
            if ($key <> $page) {
                echo '<a href="/' . $key . '">' . $menuItem . '</a>';
            } else {
                echo '<a class="active" href="#">' . $menuItem . '</a>';
            }
            echo '</li>';
        }
        ?>
    </ul>
</nav>