<?php foreach (\app\components\Session::getFlashes() as $type => $flashes) { ?>
    <?php foreach ($flashes as $message) { ?>
        <div class="alert alert-<?= $type ?>"><?= $message ?></div>
    <?php } ?>
<?php } ?>