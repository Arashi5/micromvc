<?php
/**
 * @var $weather1 array
 * @var $weather2 array
 */

?>

<div class="container">
    <h1>Погода:</h1>
    <p>
        <?= $weather1['name'] ?>:
        <?= $weather1['main']['temp']-273.15 ?> C<sup>o</sup>
    </p>
</div>