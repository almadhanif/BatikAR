<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /** Get page login */
    public function login()
    {
        return view('Auth.login');
    }

    /**
     * Handle Login Action
     */
    public function loginAction(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // if (in_array(auth()->user()->role, ['1', '2'])) {
            //     return redirect()->intended('/admin/dashboard');
            // }

            return redirect()->intended();
        }

        return back()->withErrors([
            'email' => 'Email/password salah'
        ])->onlyInput('email');
    }

    /** Get page register */
    public function register()
    {
        return view('Auth.register');
    }

    /**
     * Action for register
     */
    public function registerAction(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $validated['password'] = Hash::make($validated['password']);

        DB::beginTransaction();
        try {
            $user = User::create($validated);
            DB::commit();

            return redirect()->route('login')->with('success', 'Berhasil mendaftar. Silahkan login');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withInput($validated)->with('failed', 'Gagal mendaftarkan akun! hubungi admin untuk diproses.');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
