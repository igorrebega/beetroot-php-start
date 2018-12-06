<?php

$result = App::get('database')->insert('users', [
    'name' => $_POST['name']
]);

if ($result) {
    header('Location: /');
} else {
    echo 'Query exception';
}


