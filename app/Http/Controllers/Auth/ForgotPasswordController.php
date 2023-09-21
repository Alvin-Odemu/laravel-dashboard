<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('auth.email');
    }
    
    public function submitForgotPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'This email address does not exist.']);
        }
    
        // Generate a password reset token
        $token = PasswordBroker::createToken($user);
    
        // Send the password reset email
        $user->notify(new ResetPasswordNotification($token));
    
        return redirect()->route('login')->with('success', 'A password reset link has been sent to your email address.');
    }

    use SendsPasswordResetEmails;
}
