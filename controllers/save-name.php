<?php

$result = $app['database']->insert('users', [
    'nasdfsdme' => $_POST['name']
]);

if ($result) {
    header('Location: /');
} else {
    echo 'Query exception';
}


