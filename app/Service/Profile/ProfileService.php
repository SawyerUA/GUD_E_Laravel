<?php

namespace App\Service\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ProfileService
{

    public function update($data, User $user)
    {
        if (isset($data['img'])) {
            $img = $data['img'];
            $data['img'] = Storage::disk('public')->put('/profile_images', $img);
        }
        $user->update($data);
    }

}
