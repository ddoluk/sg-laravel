<?php

namespace App\Repositories;

use App\User;

class ProfilesRepository
{
    public function forUser(User $user)
    {
        return $user->profiles()->orderBy('created_at', 'asc')->get();
    }

    public function getOneProfile(User $user, $id)
    {
        return $this->forUser($user)->find($id);
    }
}