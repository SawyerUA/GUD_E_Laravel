<?php

namespace App\Http\Controllers;

use App\Mail\User\ResetPasswordMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function edit(User $user){
        if (auth()->user()->id == $user->id){
            return view('profile.index', compact('user'));
        }else{
            abort(404);
        }
    }

    public function update(User $user){
        $data = request()->validate([
            'id' => '',
            'name' => 'required|min:4',
            'img' => 'file'
        ]);
        if (isset($data['img'])) {
            $img = $data['img'];
            $data['img'] = Storage::disk('public')->put('/profile_images', $img);
        }
        $user->update($data);
        return redirect()->back();
    }

    public function password_change(User $user){
        if (auth()->user()->id == $user->id){
            return view('profile.password_change', compact('user'));
        }else{
            abort(404);
        }
    }

    public function password_update(User $user){
        $data = request()->validate([
            'id' => '',
            'old_password' => 'required|current_password',
            'password' => 'required|confirmed',
            'password_confirmation' => ''
        ]);
        if (Hash::check($data['old_password'], $user->password)){
            Hash::make($data['password']);
            $user->update($data);
        }
        return view('profile.password_change_success', compact('user'));
    }

    public function password_reset(User $user){
        $password = Str::random(4);
        $data = request()->validate([
            'password' => ''
        ]);
        $data['password'] = Hash::make($password);
        $user->update($data);
        Mail::to($user->email)->send(new ResetPasswordMail($password));
        return view('profile.password_change_success', compact('user'));
    }

    public function email_change(User $user){
        if (auth()->user()->id == $user->id){
            return view('profile.email_change', compact('user'));
        }else{
            abort(404);
        }
    }

    public function email_update(User $user){
        $data = request()->validate([
            'id' => '',
            'old_email' => 'required',
            'password' => 'required|current_password',
            'email' => 'required'
        ]);
        if (Hash::check($data['password'], $user->password)){
            $user->update($data);
        }
        return view('profile.email_change_success', compact('user'));
    }

}
