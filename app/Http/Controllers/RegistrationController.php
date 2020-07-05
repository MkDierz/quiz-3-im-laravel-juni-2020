<?php

namespace App\Http\Controllers;

use App\User;
use App\user_data;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('layouts.register');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create(request(['name', 'email', 'password']));
        $user_data = request(['user_fullname','user_birth']);
        $user_data['user_id'] = $user->id;
        user_data::insert($user_data);
        auth()->login($user);
//        dd();
        return redirect()->to('/');
    }
}
