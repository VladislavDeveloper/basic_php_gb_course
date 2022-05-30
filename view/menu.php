<?php if ($userName !== null) : ?>
    <div class="menu">
        <div class="menu-profile">
            <div class="profile-icon"></div>
            <a class="profile-link" href="/"><?= $userName ?></a>
        </div>
        <div class="menu-navigation">
            <a class="menu-link" href="/">Домашняя</a>
            <a class="menu-link" href="/?controller=tasks">Мои задачи</a>
            <a class="menu-link" href="/?controller=security&action=logout">Выход</a>
        </div>
    </div>
<?php else : ?>
    <div class="menu">
        <a class="menu-link" href="/">Домашняя</a>
        <a class="menu-link" href="/?controller=security">Авторизация</a>
        <a class="menu-link" href="/">Регистрация</a>
    </div>
<?php endif ?>