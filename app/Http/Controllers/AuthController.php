<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Twilio\Rest\Client;

class AuthController extends Controller
{
    protected $twilio;

    public function __construct()
    {
        $this->twilio = new Client(env('TWILIO_SID'), env('TWILIO_AUTH_TOKEN'));
    }

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
            'no_hp' => 'required|string|unique:users',
            'otp' => 'required|string',
        ]);

        // Validasi OTP
        if ($request->otp != session('otp') || now() > session('otp_expires_at')) {
            return back()->withErrors(['otp' => 'OTP tidak valid atau sudah kadaluarsa']);
        }

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_hp' => $request->no_hp,
        ]);

        Auth::login($user);

        // Hapus session OTP
        session()->forget(['otp', 'otp_expires_at']);

        return redirect()->route('home');
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
            return redirect()->route('home');
        }

        return redirect()->back()->withErrors(['login' => 'Login gagal, periksa kembali username dan password anda.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'no_hp' => 'required|string',
        ]);

        // Generate OTP
        $otp = mt_rand(100000, 999999);

        // Simpan OTP (gunakan session atau database)
        session(['otp' => $otp, 'otp_expires_at' => now()->addMinutes(5)]);

        // Log untuk debugging
        Log::info("OTP generated for {$request->no_hp}: {$otp}");

        // Di sini seharusnya ada kode untuk mengirim SMS
        // Untuk sementara, kita anggap berhasil

        return response()->json(['success' => true, 'message' => 'OTP berhasil dikirim']);
    }
}
