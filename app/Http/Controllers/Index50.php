<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Index50 extends Controller
{
    public function index50()
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
            $foto = Auth::user()->foto;
        } else {
            $role = null;
            $foto = null;
        }

        return view('dashboard', [
            'role' => $role,
            'foto' => $foto,
        ]);
    }
}
