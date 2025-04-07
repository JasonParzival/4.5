<?php
        $is_image = $url == '/wheatley/image';
        $is_info = $url == '/wheatley/info';
?>

<h1>Уитли</h1>

<div class="container">
        <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link <?= $is_image ? "active" : '' ?>" href="/wheatley/image">
                Картинка
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $is_info ? "active" : '' ?>" href="/wheatley/info">
                Описание
            </a>
        </li>
        </ul>
</div>

<div style="margin-top: 15px;">
        <ul class="list-group">
                <li class="list-group-item">
                        <?php if ($is_image) {?>
                                <?php require "/wheatley_image.php"; ?>
                        <?php } else if ($is_info) { ?>
                                <?php require "/wheatley_info.php"; ?>
                        <?php } else { ?>
                                Выберите вверху информацию, которую хотите увидеть<br>
                        <?php } ?>
                </li>
        </ul>
</div>