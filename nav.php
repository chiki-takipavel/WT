<?php
    $menu = array('Главная' => 'index.php', 'О проекте' => 'about.php');
    if(isset($_GET['']))
        $id = $_GET[''];
    else
        $id = 0;
?>

<nav>
    <ul class="nav-links">
    <?php foreach($menu as $key => $menuItem):?>
        <li> 
            <?php if($nav <> $id) {?>
            <a href="/<?=$nav?>"><?=$key?></a>
            <?php } 
            elseif($nav == $id) { ?>
            <a class="active" href="#"><?=$key?></a>
            <?php } ?>
        </li>
    <?php
        endforeach;
    ?>
    </ul>
</nav>