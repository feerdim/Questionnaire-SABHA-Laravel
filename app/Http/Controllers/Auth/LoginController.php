<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function login(Request $request)
    {
        $messages = [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'email.exists' => "Email tidak ada",
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 8 karakter'
        ];

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8'
        ], $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password ], $request->remember)) {
                return redirect()->intended(route('question.index'));
            }

            return redirect()->back()->withInput($request->only('email', 'password', 'remember'))->withErrors([
                'password' => 'Password salah',
            ]);
        }
    }

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
