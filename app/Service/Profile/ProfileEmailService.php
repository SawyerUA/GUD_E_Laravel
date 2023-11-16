<?php

namespace App\Service\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileEmailService
{

    public function update($data, User $user)
    {
        if (Hash::check($data['password'], $user->password)){
            $user->update($data);
        }
    }

}
