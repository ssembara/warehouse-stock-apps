<?php

namespace App\Repositories;

use App\User;

class UserRepository
{
    protected $user;


    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        return $this->user->with('roles')->get();
    }
}
