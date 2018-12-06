<?php

class PagesController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users', 'User');

        require 'views/index.view.php';
    }

    public function contact()
    {
        require 'views/contact.view.php';
    }

    public function about()
    {
        require 'views/about.view.php';
    }
}