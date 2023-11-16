<?php

namespace App\Service\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfilePasswordService
{

    public function update($data, User $user)
    {
        if (Hash::check($data['old_password'], $user->password)){
            Hash::make($data['password']);
            $user->update($data);
        }
    }

}
