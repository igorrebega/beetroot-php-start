<?php require 'partials/header.view.php' ?>

<h1>Ask your name</h1>
<form action="save-name" method="POST">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php require 'partials/footer.view.php' ?>

