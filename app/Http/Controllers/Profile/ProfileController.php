<?php

namespace App\Http\Controllers\Profile;

use App\Http\Requests\Profile\UpdateRequest;
use App\Models\User;

class ProfileController extends BaseController
{
    public function index(User $user){
        if (auth()->user()->id == $user->id){
            return view('profile.index', compact('user'));
        }else{
            abort(404);
        }
    }

    public function update(UpdateRequest $request, User $user){
        $data = $request->validated();
        $this->service->update($data, $user);

        return redirect()->back();
    }

}
