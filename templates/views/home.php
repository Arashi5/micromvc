
<?php
/**
 * @var $user User
 * @var $this Controller
 * @var $time integer
 */
?>

<div class="container">
    <h1>hello <?= $user->getFullName() ?></h1>
    <p>Unix время:  <?= $time ?></p>
    <a href="<?= $this->route('reg')?>" class="btn">регистрация</a>
    <a href="<?= $this->route('weather')?>" class="btn">погода</a>
</div>


<script src="templates/assets/js/script.js?<?= filemtime('templates/assets/js/script.js')?>"/>




