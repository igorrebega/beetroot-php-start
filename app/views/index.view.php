<?php require 'partials/header.view.php' ?>

<h1>Ask your name</h1>
<form action="users" method="POST">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<ul>
    <?php foreach ($users as $user) : ?>
        <li><?= $user->getFullName() ?> </li>

        <li></li>
    <?php endforeach; ?>
</ul>

<?php require 'partials/footer.view.php' ?>



