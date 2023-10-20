<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(10);
        $categories = Category::all();
        return view('forum/admin/users/index', compact('users', 'categories'));
    }

    public function edit(User $user){
        $categories = Category::all();
        return view('forum/admin/users/edit', compact('user','categories'));
    }

    public function update(User $user){
        $data = request()->validate([
            'name' => '',
            'is_admin' => '',
        ]);

        $user->update($data);
        return redirect(route('user.index'));
    }
}
