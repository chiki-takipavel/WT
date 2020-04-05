<?php
$menu = array('index.php' => 'Главная', 'about.php' => 'О проекте');
$page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
?>

<nav>
    <ul class="nav-links">
        <?php foreach ($menu as $key => $menuItem) { ?>
            <li>
                <?php
                if ($key <> $page) {
                    echo '<a href="/' . $key . '">' . $menuItem . '</a>';
                } else {
                    echo '<a class="active" href="#">' . $menuItem . '</a>';
                }
                ?>
            </li>
        <?php } ?>
    </ul>
</nav>