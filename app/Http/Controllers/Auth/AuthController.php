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
        $request->validate([
            "login_id" => "required|string",
            "password" => "required|string",
        ]);

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


    public function getAuthInfo()
    {
        return view("admin.pages.auth.index", ["user" => auth()->user()]);
    }

    public function updateAuthInfo(Request $request)
    {
        $id = auth()->id();
        $request->validate([
            "name" => "required|string|lowercase|alpha_dash:ascii|unique:users,name," . $id,
            "email" => "nullable|email:email:rfc,dns|unique:users,email," . $id,
            "mobile" => "nullable|numeric|unique:users,mobile," . $id,
            "current_password" => "nullable|required_with:new_password|current_password:web",
            "new_password" => "nullable|required_with:current_password",
        ]);

        $user = auth()->user();
        if ($request->current_password && $request->new_password) {
            $user->update([
                "password" => $request->new_password,
            ]);
        }

        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "mobile" => $request->mobile,
        ]);

        return back()->with(["success" => "The credentials changed successfully."]);
    }
}
