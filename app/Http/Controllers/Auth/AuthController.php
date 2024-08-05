<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password as RulesPassword;

class AuthController extends Controller
{
    public function showEmailVerification()
    {
        return view('dashboard.auth.email-verification');
    }

    public function emailVerification(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return redirect()->back()->with('message', 'Email verification request has been sent');
    }

    public function verify(EmailVerificationRequest $emailVerificationRequest)
    {
        $emailVerificationRequest->fulfill();
        return redirect(route('dashboard.index'));
    }

    public function forgotPassword()
    {
        return view('dashboard.auth.forgot-password');
    }

    public function requestResetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins',
        ]);

        $status = Password::sendResetLink($request->only('email'));
        return redirect()->back()->with('success', __($status));
    }

    public function resetPassword(Request $request, $token)
    {
        return view('dashboard.auth.recover-password', ['token' => $token, 'email' => $request->input('email')]);
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:password_reset_tokens',
            'newPassword' => ['required', 'string', RulesPassword::min(8)->letters()->numbers()->mixedCase()->symbols()->uncompromised(), 'confirmed'],
        ]);

        $status = Password::reset(['email' => $request->input('email'), 'password' => $request->input('newPassword'), 'token' => $request->input('token')], function ($user, $password) {
            $user->forceFill(['password' => Hash::make($password)])->save();
            event(new PasswordReset($user));
        });
        return redirect()->route('auth.login')->with('success', __($status));
    }
}
