<?php

namespace App\Models;

Class User
{
    public $id;
    public $name;
    public $lastname;

    public function getFullName()
    {
        return $this->name . ' ' . $this->lastname;
    }
}