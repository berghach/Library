<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;
use App\Models\Role;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }
    public function store(StoreUserRequest $request)
    {
        $role = Role::where('role_name', 'user')->first();
        $data = $request->validated();
        $user = User::create($data);
        $user->role()->associate($role);
        $user->save();
        Auth::login($user);
        return redirect()->intended('home');
    }
}
