<?php

namespace App\Http\Controllers;

// use App\Models\Agama;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class User50Controller extends Controller
{
    public function users50()
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
        } else {
            $role = null;
        }
        $users = collect(User::where('role', 'User')->get());
        return view('user.users', [
            'no' => 1,
            'users' => $users->sortBy('is_aktif', false),
            'role' => $role,
        ]);
    }

    public function profile50()
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
        } else {
            $role = null;
        }
        return view('user.profile', [
            'role' => $role,
        ]);
    }

    public function detailUser50($id)
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
        } else {
            $role = null;
        }

        $user = User::find($id);
        return view('user.detailUser', [
            'user' => $user,
            'role' => $role,
        ]);
    }

    // ===aprove user===
    public function approveUser50($id)
    {
        $user = User::find($id);
        $user->is_aktif = true;
        $user->save();

        return redirect('/users50')->with('success', 'Success Aprove');
    }

    public function deleteUser50($id)
    {
        User::find($id)->delete();
        return redirect('/users50')->with('success', 'Success delete');
    }

    public function login50()
    {
        return view('auth.login');
    }

    public function loginProses50(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect('/');
        }
        return redirect('/login50')->with('error', 'Email or password wrong');
    }

    public function logout50(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function register50()
    {
        return view('auth.register');
    }

    public function registerProses50(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
            'foto' => $request->foto
        ]);

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('img/', $request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
            $user->save();
        }


        return redirect('/login50')->with('success', 'register success');
    }

    public function updatePassword50()
    {
        return view('user.updatePassword');
    }

    public function nonaktif50(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login50')->with('error', 'Akun Belum Diaktivasi, Tunggu Admin Mengaktivasi terlebih dahulu');;
    }


    public function updatePasswordProses50(Request $request, $id)
    {
        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/profile50')->with('success', 'update password success');
    }
}
