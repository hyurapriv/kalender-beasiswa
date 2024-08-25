<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function registForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'email_verification_token' => Str::random(32),
        ]);

        $this->sendVerificationEmail($user);

        return redirect()->route('login')->with('message', 'Silakan verifikasi email Anda untuk menyelesaikan pendaftaran.');
    }

    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required|string', // Bisa username maupun email
            'password' => 'required|string|min:8',
        ]);

        $login = $request->input('login');
        $credentials = filter_var($login, FILTER_VALIDATE_EMAIL)
            ? ['email' => $login, 'password' => $request->input('password')]
            : ['username' => $login, 'password' => $request->input('password')];

        if (Auth::attempt($credentials)) {
            if (Auth::user()->email_verified_at === null) {
                Auth::logout();
                return redirect()->route('login')->withErrors(['login' => 'Silakan verifikasi email Anda terlebih dahulu.']);
            }
            return redirect()->route('home');
        }

        return redirect()->back()->withErrors(['login' => 'Login gagal, periksa kembali username dan password anda.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function sendVerificationEmail($user)
    {
        // Generate token verifikasi baru
        $user->email_verification_token = Str::random(32);
        $user->save();

        // Kirim email verifikasi
        try {
            Mail::send('emails.verify', ['user' => $user], function ($message) use ($user) {
                $message->to($user->email);
                $message->subject('Verifikasi Email Anda');
            });

            return response()->json(['success' => true, 'message' => 'Email verifikasi telah dikirim.']);
        } catch (\Exception $e) {
            Log::error('Failed to send verification email: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Gagal mengirim email verifikasi.'], 500);
        }
    }


    public function verifyEmail($token)
    {
        $user = User::where('email_verification_token', $token)->first();

        if (!$user) {
            return redirect()->route('login')->withErrors(['email' => 'Token verifikasi tidak valid.']);
        }

        $user->email_verified_at = now();
        $user->email_verification_token = null;
        $user->save();

        return redirect()->route('login')->with('message', 'Email berhasil diverifikasi. Silakan login.');
    }
}
