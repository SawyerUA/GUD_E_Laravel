<?php

namespace App\Http\Controllers;

use App\Mail\QuestionAsk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AskAuthorController extends Controller
{
    public function store(){
        $users = User::where('is_admin', 1)->get('email');
        $data = request()->validate([
            'email' => '',
            'text' => ''
        ]);
        $email = $data['email'];
        $text = $data['text'];
        Mail::to($users)->send(new QuestionAsk($email, $text));
        return redirect()->back();
    }
}
