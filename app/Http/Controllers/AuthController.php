<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function register_view() {
        return view('auth.register');
    }

    public function register(RegisterRequest $request) {
        $avatar = '';

        if($request->file('avatar')) {
            $ext = $request->file('avatar')->extension();
            $avatar = time() . "." . $ext;
            $request->file('avatar')->move(public_path('assets/uploads/avatars'), $avatar);
        }

        $data = [
            'name' => $request['name'],
            'birth_date' => $request['birth_date'],
            'avatar' => $avatar,
            'role_id' => $request['role_id'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ];

        $register = User::create($data);
        if($register) {
            return redirect()
                ->route('login_view')
                ->with('success', 'Account successfully created');
        }

    }

    public function login_view() {
        return view('auth.login');
    }

    public function login(LoginRequest $request) {
        $data = [
            'email' => $request['email'],
            'password' => $request['password']
        ];

        if(Auth::attempt($data)) {
            return redirect()->route('home');
        } else {
            return back()
                ->with('fail', 'Incorrect Login or Password');
        }
    }

    public function home() {
        return view('dash.index');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login_view');

    }
}
