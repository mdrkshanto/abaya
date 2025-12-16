<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.pages.login.index');
    }

    public function login(Request $request)
    {
        $user = User::whereAny(['name', 'email', 'mobile'], $request->login_id)->first();

        if ($user && password_verify($request->password, $user->password)) {
            auth()->login($user, $request->remember_me);
            return redirect()->route('orders');
        } else {
            throw ValidationException::withMessages(["credentials" => "Invalid credentials!"]);
        }
    }

    public function logout()
    {
        auth()->logout();
        return back();
    }
}
