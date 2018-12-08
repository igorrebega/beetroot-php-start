<?php

use Core\Router;
use Core\Request;

require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load('routes.php')->direct(
    Request::uri(),
    Request::method()
);


