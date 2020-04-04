<?php
$menu = array('index.php' => 'Главная', 'about.php' => 'О проекте');
if (isset($_GET['url']))
    $url = $_GET['url'];
else
    $url = '';
?>

<nav>
    <ul class="nav-links">
        <?php foreach ($menu as $key => $menuItem) : ?>
            <li>
                <?php
                if ($key <> $url) { ?>
                    <a href="<?= '/' . $key . '?url=' . $key ?>"><?= $menuItem ?></a>
                <?php } elseif ($key == $url) { ?>
                    <a class="active" href="#"><?= $menuItem ?></a>
                <?php }
                ?>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>