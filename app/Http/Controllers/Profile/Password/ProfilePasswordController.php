<?php

namespace App\Http\Controllers\Profile\Password;

use App\Http\Controllers\Profile\BaseController;
use App\Http\Requests\Profile\ResetPasswordRequest;
use App\Http\Requests\Profile\UpdatePasswordRequest;
use App\Mail\User\ResetPasswordMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ProfilePasswordController extends BaseController
{
    public function index(User $user){
        if (auth()->user()->id == $user->id){
            return view('profile.password_change', compact('user'));
        }else{
            abort(404);
        }
    }

    public function update(User $user, UpdatePasswordRequest $request){
        $data = $request->validated();
        $this->service->update($data, $user);
        return view('profile.password_change_success', compact('user'));
    }

    public function reset(User $user, ResetPasswordRequest $request){
        $password = Str::random(4);
        $data = $request->validated();
        $data['password'] = Hash::make($password);
        $user->update($data);
        Mail::to($user->email)->send(new ResetPasswordMail($password));
        return view('profile.password_reset', compact('user'));
    }

}
