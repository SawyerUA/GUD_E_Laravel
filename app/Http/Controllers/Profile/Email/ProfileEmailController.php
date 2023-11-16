<?php

namespace App\Http\Controllers\Profile\Email;

use App\Http\Controllers\Profile\BaseController;
use App\Http\Requests\Profile\UpdateEmailRequest;
use App\Models\User;

class ProfileEmailController extends BaseController
{
   public function index(User $user){
        if (auth()->user()->id == $user->id){
            return view('profile.email_change', compact('user'));
        }else{
            abort(404);
        }
    }

    public function update(UpdateEmailRequest $request, User $user){
        $data = $request->validated();
        $this->service->update($data, $user);
        return view('profile.email_change_success', compact('user'));
    }

}
