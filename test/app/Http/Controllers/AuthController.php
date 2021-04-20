<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Petugas;

class AuthController extends Controller
{
    public function loginStaff() {
        return view('auth.login', ['staff' => true]);
    }

    public function loginStaffRequest(Request $request) {
        request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $petugas = Petugas::where('username', '=', $request->username)->first();
        if (Hash::check($request->password, $petugas->password)) {
            if (auth('petugas')->loginUsingId($petugas->id_petugas)) {
                return redirect()->route('siswa');
            }
        } else {
            return redirect()->back()->with('status', 'Password tidak sesuai');
        }

        return redirect()->back()->with('status', 'Gagal login');
    }

    public function login() {
        return view('auth.login', ['staff' => false]);
    }

    public function loginRequest(Request $request) {
        request()->validate([
            'nisn' => 'required'
        ]);
    }

    public function logout(Request $request) {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.loginStaff');
    }
}
