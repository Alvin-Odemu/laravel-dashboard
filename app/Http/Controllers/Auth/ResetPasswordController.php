<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'password' => 'required|confirmed',
        ]);
    
        $user = PasswordBroker::getUserByToken($request->token);
    
        if (!$user) {
            return redirect()->back()->withErrors(['token' => 'This password reset token is invalid.']);
        }
    
        $user->password = Hash::make($request->password);
        $user->save();
    
        return redirect()->route('login')->with('success', 'Your password has been reset successfully.');
    }

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}
