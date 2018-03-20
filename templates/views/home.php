<?php
/**
 * @var $this \app\controllers\Controller
 * @var $user \app\models\User
 * @var $time integer
 */
?>

<div class="container">
    <h1>Hello <?= $user->getFullName() ?></h1>
    <p>Unix время: <?= $time ?></p>
    <a href="<?= $this->route('reg') ?>" class="btn">Регистрация</a>
    <a href="<?= $this->route('weather') ?>" class="btn">Погода</a>
</div>

<script src="templates/assets/js/script.js?<?= filemtime('templates/assets/js/script.js') ?>"></script>