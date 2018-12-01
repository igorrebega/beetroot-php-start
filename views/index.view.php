<?php require 'partials/header.view.php' ?>

<ul>
    <?php foreach ($users as $user) : ?>
        <li><?= $user->getFullName() ?> </li>

        <li></li>
    <?php endforeach; ?>
</ul>

<?php require 'partials/footer.view.php' ?>



