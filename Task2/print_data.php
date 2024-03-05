<?php
function show_data(string $full_name, mixed $image): void {
    ?>
    <h1>Hello
    <?= $full_name ?>
    </h1>
    <img src="<?= $image ?>" height='200px'>
    <?php
}
