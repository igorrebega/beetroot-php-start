<?php

class PagesController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users', 'User');

        view('index', [
            'users' => $users
        ]);
    }

    public function contact()
    {
        view('contact');
    }

    public function about()
    {
        view('about');
    }
}